<?php

class Regime_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function regime_par_utilisateur()
    {
        //$id_utilisateur = $this->session->userdata('user_id');
        $id_utilisateur = 1;
        $sql = "SELECT R.id_regime id_regime, R.designation designation, I_G.date_regime date_regime, I_G.duree duree, I_G.montant montant FROM
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