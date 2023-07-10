<?php

class Utilisateur_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function inscription()
    {
        $this->db->trans_start();
        // Création nouveau porte feuille
        $porte_feuille = array(
            'montant'=> 0
        );
        $this->db->insert('porte_feuille', $porte_feuille);
        $id_porte_feuille = $this->db->insert_id();

        // Création utilisateur
        $data = array(
            'nom' => $this->input->post('nom'),
            'prenom' => $this->input->post('prenom'),
            'email' => $this->input->post('email'),
            'mot_de_passe' => $this->input->post('motDePasse'),
            'date_de_naissance' => to_timestamp($this->input->post('date_de_naissance')),
            'id_porte_feuille' => $id_porte_feuille
        );
        $this->db->insert('utilisateur', $data);

        $this->db->trans_complete();
    }

    public function connexion()
    {
        $this->db->where('email', $this->input->post('email'));
        $this->db->where('mot_de_passe', $this->input->post('motDePasse'));
        $query = $this->db->get('utilisateur');
        if($query->num_rows() === 1) {
            $row = $query->row();
            $data = array(
                'user_id' => $row->id,
                'user_nom' => $row->nom,
                'user_prenom' => $row->prenom,
                'user_email' => $row->email,
                'user_date_de_naissance' => $row->date_de_naissance,
                'user_id_porte_feuille' => $row->id_porte_feuille,
                'is_admin' => false
            );
            $this->session->set_userdata($data);
            return TRUE;
        } else {
            return FALSE;
        }
    }
}