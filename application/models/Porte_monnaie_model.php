<?php

class Porte_monnaie_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_liste_code()
    {
        $this->db->select('code, montant');
        $this->db->from('code');
        $this->db->order_by('id_code', 'DESC');
        $query = $this->db->get();
        $result = $query->result_array();
        foreach ($result as &$row) {
            $row['utilisable'] = $this->est_utilisable_code($row['code']);
            $row['utilise'] = $this->code_deja_utilise($row['code'], $this->session->userdata('user_id'));
        }
        return $result;
    }

    public function code_existe($code)
    {
        $this->db->where('code', $code);
        $query = $this->db->get('code');
        if($query->num_rows() === 0) {
            return -1;
        }
        return $query->row()->id_code;
    }

    public function code_deja_utilise($code, $id_utilisateur)
    {
        $code_id = $this->code_existe($code);
        if($code_id === -1) {
            return FALSE;
        }
        $this->db->where('id_utilisateur', $id_utilisateur);
        $this->db->where('id_code', $code_id);
        $query = $this->db->get('insertion_code');
        if($query->num_rows() > 0) {
            return TRUE;
        }
        return FALSE;
    }

    public function est_utilisable_code($code)
    {
        $code_id = $this->code_existe($code);
        if ($code_id === -1) {
            return FALSE;
        }

        $this->db->where('id_code', $code_id);
        $this->db->where('etat', 10);
        $query = $this->db->get('insertion_code');
        if($query->num_rows() > 0) {
            return FALSE;
        }
        return TRUE;
    }
}