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

    public function connexion()
    {
        $this->db->where('email', $this->input->post('email'));
        $this->db->where('motDePasse', $this->input->post('motDePasse'));
        $query = $this->db->get('utilisateur');
        if($query->num_rows() === 1) {
            $row = $query->row();
            $data = array(
                'user_id' => $row->id,
                'user_nom' => $row->nom,
                'user_prenom' => $row->prenom,
                'user_email' => $row->email,
                'user_niveau' => $row->niveau,
                'user_logged_in' => TRUE
            );
            $this->session->set_userdata($data);
            return TRUE;
        } else {
            return FALSE;
        }
    }
}