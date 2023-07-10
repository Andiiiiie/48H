<?php

class Details_patient_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function inserer_details()
    {   
        $this->load->model("Parametres_model");
        
        $this->db->select('*');
        $this->db->from('parametres');
        $query = $this->db->get();
        $parametres = $query->result_array();

       // $id_utilisateur = $this->session->userdata('user_id');
        $id_utilisateur = 1;
        foreach($parametres as $parametre){
            $data = array(
                'id_utilisateur' => $id_utilisateur,
                'valeur' => $this->input->post($parametre['id_parametre']),
                'id_parametre' => $parametre['id_parametre']
            );
            $this->db->insert('details_patient', $data);
        }
    }
}