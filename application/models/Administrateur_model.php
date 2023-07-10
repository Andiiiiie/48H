<?php

class Administrateur_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function connexion()
    {
        $this->db->where('email', $this->input->post('email'));
        $this->db->where('mot_de_passe', $this->input->post('motDePasse'));
        $query = $this->db->get('administrateur');

        if($query->num_rows() === 1) {
            $row = $query->row();
            $data = array(
                'user_id' => $row->id,
                'user_email' => $row->email,
                'is_admin' => true
            );
            $this->session->set_userdata($data);
            return TRUE;
        } else {
            return FALSE;
        }
    }
}