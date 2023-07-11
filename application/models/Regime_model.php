<?php

class Regime_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function regime_by_id($id_regime){
        $this->db->select('*');
        $this->db->from('regime');
        $this->db->where('id_regime', $id_regime);
        $query = $this->db->get();
        $result = $query->row_array();
        return $result[0];
    }
    // traitement s'inscrire à un nouveau regime
    public function insertion_regime($id_regime){
        $details_regime = $this->details_regime_by_id($id_regime);
        $objectif = $this->obtenir_objectif();
        $duree = $objectif['poids_vise'] / $details_regime['vitesse'];
        echo $duree;
        $prix = $this->obtenir_prix_approprie($duree, $id_regime);
        $bol = $this->check_porte_feuille($prix);
        if($bol == false){
            throw new Exception("Porte feuille insuffisant");
        }
        $this->inserer_inscription_regime($duree, $prix, $id_regime);
    }


    public function obtenir_type_utilisateur(){
        $id_utilisateur = $this->session->userdata('user_id');
        $sql = "
            SELECT tu.id_utilisateur, tu.date_implementation, t.remise, t.designation, t.prix FROM
            type_utilisateur tu 
                join types t on tu.id_type = t.id_type 
            WHERE tu.id_utilisateur = $id_utilisateur;
        ";
        $query = $this->db->query($sql);
        $result = $query->row_array();
        return $result;
    }
    // insertion du nouveau regime
    public function inserer_inscription_regime($duree, $prix, $id_regime){
        $type_utilisateur = $this->obtenir_type_utilisateur();
        $prix_reduit = $prix - ($prix * $type_utilisateur['remise'] / 100);
        $data = array(
            'id_utilisateur' => $this->session->userdata('user_id'),
            'id_regime' => $id_regime,
            'duree' => $duree,
            'montant' => $prix_reduit
        );
        $this->db->insert('inscription_regime', $data);
    }

    // obtenir prix approprie du regime
    public function obtenir_prix_approprie($duree, $id_regime){
        $sql = "
            SELECT TR.prix FROM TARIF_REGIME TR
            WHERE TR.duree >= $duree and id_regime=$id_regime order by tr.duree desc limit 1
        ";
        echo $sql;
        $query = $this->db->query($sql);
        $result = $query->row();
        if(count($result) == 0) {
            throw new Exception("No appropriate price found");
        }
        var_dump($result);
        return $result->prix;
    }

    // check porte feuillle si valide
    public function check_porte_feuille($argent){
        $this->load->model('porte_feuille_model');
        $id_utilisateur = $this->session->userdata('user_id');
        $porte_feuille = $this->porte_feuille_model->porte_feuille_par_utilisateur();
        if($porte_feuille['montant'] < $argent){
            return false;
        }
        return true;
    }

    // obtenir l'objectif de l'utilisateur en cours
    public function obtenir_objectif(){
        $id_utilisateur = $this->session->userdata('user_id');
        $sql = "
        SELECT * FROM OBJECTIF O WHERE id_utilisateur = $id_utilisateur order by id_objectif desc limit 1";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        if(count($result) == 0){
            throw new Exception("PLEASE INSERT OBJECTIF AND DETAILS FIRST");
        }
        return $result[0];
    }

    public function details_regime_by_id($id_regime){
        $sql = "
            SELECT R.id_regime, R.designation, TR.date_implementation, TR.duree, TR.prix, (E.poinds / E.duree) vitesse FROM REGIME R
            JOIN TARIF_REGIME TR 
                ON R.id_regime = TR.id_regime
            JOIN EFFET E
                ON E.id_regime = R.id_regime
            WHERE R.id_regime = $id_regime
        ";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        
        return $result[0];
    }

    public function obtenir_regime_par_id($id_regime){
        $sql = "SELECT * FROM REGIME WHERE id_regime = $id_regime";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result[0];
    }
    
    public function identifier_regime_valiede($id_regime){
        $sql = "SELECT * FROM tarif_REGIME WHERE id_regime = $id_regime";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result[0];
    }

    public function last_inscription($id_regime){
        $id_utilisateur = $this->session->userdata('user_id');
        $sql = "SELECT * FROM inscription_regime WHERE id_utilisateur = $id_utilisateur and id_regime = $id_regime";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result[0];
    }
    public function price_insertion_regime(){

    }
    public function obtenir_tarif_regime(){
        $sql = "SELECT * FROM TARIF_REGIME";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result[0];
    }

    public function obtenir_regime_optimisee($ordre){
        $id_utilisateur = $this->session->userdata('user_id');
        $objectif = $this->obtenir_objectif();
        if($objectif['nature'] == -1) {
            $ordre = "ASC";
        }
        else{
            $ordre = "DESC";
        }
        $sql = "
            SELECT * FROM (SELECT D_P.id_utilisateur, R.image_path, R.designation regime_designation, D_P.valeur, C.interval_debut, C.interval_fin, P.designation parametre_designation, R.id_regime, (E.poinds/E.duree) vitesse, count(R.id_regime) nombre FROM REGIME R
            JOIN REGIME_CONTRAINTE C 
                ON R.id_regime = C.id_regime
            JOIN PARAMETRES P
                ON P.id_parametre = C.id_parametre
            JOIN DETAILS_PATIENT D_P
                ON D_P.id_parametre = P.id_parametre
            JOIN EFFET E
                ON E.id_regime = R.id_regime
            WHERE D_P.valeur BETWEEN C.interval_debut AND C.interval_fin group by R.id_regime) AS T
            WHERE T.nombre = (SELECT count(*) FROM PARAMETRES)  AND T.id_utilisateur = $id_utilisateur
            ORDER BY T.vitesse $ordre
        ";
        $query = $this->db->query($sql);    
        $result = $query->result_array();
        if(count($result) == 0) {
            throw new Exception("No regime found");
        }
        return $result[0];
    }

    public function regime_par_utilisateur()
    {
        $id_utilisateur = $this->session->userdata('user_id');
        $sql = "SELECT R.id_regime id_regime, R.image_path, R.designation designation, I_G.date_regime date_regime, I_G.duree duree, I_G.montant montant FROM
            REGIME R 
                JOIN  INSCRIPTION_REGIME I_G
                    ON R.id_regime = I_G.id_regime
            WHERE I_G.id_utilisateur = $id_utilisateur";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        if(count($result) == 0) {
            throw new Exception("Pas encode inscrit à un regime");
        }
        return $result[0];
    }

    public function regime_par_utilisateur2()
    {
        $id_utilisateur = $this->session->userdata('user_id');
        $sql = "SELECT R.id_regime id_regime, R.image_path, R.designation designation, I_G.date_regime date_regime, I_G.duree duree, I_G.montant montant FROM
            REGIME R 
                JOIN  INSCRIPTION_REGIME I_G
                    ON R.id_regime = I_G.id_regime
            WHERE I_G.id_utilisateur = $id_utilisateur";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        
        return $result[0];
    }

    public function random_regime(){
        $sql = "SELECT * FROM REGIME ORDER BY RAND() LIMIT 1";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result[0];
    }

    public function details_regime($id_regime){
        $sql = "SELECT * FROM REGIME WHERE id_regime = $id_regime";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result[0];
    }

    public function plat_du_regime($id_regime){
        $sql = "
            SELECT R.designation, P_D.composition, P_D.image_path FROM REGIME R 
            JOIN R_REGIME_PLAT R_R_P 
                ON R.id_regime = R_R_P.id_regime 
            JOIN PLAT P 
                ON R_R_P.id_plat = P.id_plat 
            JOIN PLAT_DETAIL P_D 
                ON P.id_plat = P_D.id_plat 
            WHERE R.id_regime = $id_regime;
        ";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function activite_du_regime($id_regime){
        $sql = "
            SELECT R.designation, A_D.composition, A_D.image_path FROM REGIME R 
            JOIN R_REGIME_ACTIVITE R_R_A 
                ON R.id_regime = R_R_A.id_regime 
            JOIN ACTIVITE A 
                ON R_R_A.id_activite = A.id_activite
            JOIN ACTIVITE_DETAIL A_D 
                ON A.id_activite = A_D.id_activite 
            WHERE R.id_regime = $id_regime;
        ";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }
}