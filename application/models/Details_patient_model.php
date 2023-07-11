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

        $id_utilisateur = $this->session->userdata('user_id');
        
        foreach($parametres as $parametre){
            $data = array(
                'id_utilisateur' => $id_utilisateur,
                'valeur' => $this->input->post($parametre['id_parametre']),
                'id_parametre' => $parametre['id_parametre']
            );
            $this->db->insert('details_patient', $data);
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
}