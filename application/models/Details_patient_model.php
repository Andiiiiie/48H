<?php

class Details_patient_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_gold_pack(){
        $sql = "select * from types where designation = 'Gold'";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result[0];
    }

    public function update_porte_feuille($argent){
        $id_utilisateur = $this->session->userdata("user_id");
        $sql = "update porte_feuille set montant = montant - $argent where id_porte_feuille = ( select id_porte_feuille from utilisateur where id_utilisateur = $id_utilisateur)";
        $query = $this->db->query($sql);
     //   $query->exec();
    }

    public function process_to_gold(){
        $gold_pack = $this->get_gold_pack();
        var_dump($gold_pack);
        $this->update_porte_feuille($gold_pack['prix']);
        $id_utilisateur = $this->session->userdata('user_id');
        $data = array(
            'id_utilisateur' => $id_utilisateur,
            'id_type' => $gold_pack["id_type"]
        );
        $this->db->insert('type_utilisateur', $data);
    }

    public function inserer_details()
    {   
        $this->load->model("Parametres_model");
        
        $this->db->select('*');
        $this->db->from('parametres');
        $query = $this->db->get();
        $parametres = $query->result_array();

        $id_utilisateur = $this->session->userdata('user_id');
        
        foreach($parametres as $parametre){
            $bol = $this->efa_nisy($id_utilisateur, $this->input->post($parametre['id_parametre']));
            if($bol == true){
                $value = $this->input->post($parametre['id_parametre']);
                $id_param = $parametre['id_parametre'];
                $sql = "update details_patient set valeur = $value
                where id_utilisateur = $id_utilisateur and id_parametre = $id_param";
                $query = $this->db->query($sql);
                $query->exec();
            }
            else{
                $data = array(
                    'id_utilisateur' => $id_utilisateur,
                    'valeur' => $this->input->post($parametre['id_parametre']),
                    'id_parametre' => $parametre['id_parametre']
                );
                $this->db->insert('details_patient', $data);
            }
        }

        $poids_objectif = $this->input->post('objectif');
        $nature_objectif = $this->input->post('nature');
        if($nature_objectif == 0) // IMC TRATRARINA
        {
            $taille = $this->input->post("2") / 100;
            $poids_objectif = $this->input->post("1") / t * t;
        }

        $objectif = array(
            'id_utilisateur' => $id_utilisateur,
            'poids_vise' => $poids_objectif,
            'nature' => $this->input->post('nature')
        );

        var_dump($objectif);
        
        $this->session->set_userdata("objectif", "1");
        $this->db->insert('objectif', $objectif);
    }
    public function efa_nisy($id_utilisateur, $id_parametre){
        $sql = "select * from details_patient where id_utilisateur = $id_utilisateur and id_parametre=$id_parametre";
        $query = $this->db->query($sql);
        $result = $query->row();
        if(count($result) == 0) {
            return false;
        }
        return true;
    }
}