<?php

class Utilisateur_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function inscription($niveau=1)
    {
        $data = array(
            'nom' => $this->input->post('nom'),
            'prenom' => $this->input->post('prenom'),
            'email' => $this->input->post('email'),
            'motDePasse' => $this->input->post('motDePasse'),
            'niveau' => $niveau
        );
        $this->db->insert('utilisateur', $data);
    }
}