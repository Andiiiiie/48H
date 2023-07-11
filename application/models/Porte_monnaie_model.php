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
            $row['en_attente'] = $this->code_en_attente($row['code'], $this->session->userdata('user_id'));
            $row['confirme'] = $this->code_confirme($row['code'], $this->session->userdata('user_id'));
            $row['utilisable'] = $this->est_utilisable_code($row['code']);
        }
        return $result;
    }

    public function count_utilisable()
    {
        $this->db->select('code, montant');
        $this->db->from('code');
        $this->db->order_by('id_code', 'DESC');
        $query = $this->db->get();
        $result = $query->result_array();
        $count = 0;
        foreach ($result as &$row) {
            if($this->est_utilisable_code($row['code'])) {
                $count++;
            }
        }
        return $count;
    }

    public function count_regime()
    {
        return $this->db->count_all_results('regime');
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
        $this->db->where('etat !=', -10);
        $query = $this->db->get('insertion_code');
        if($query->num_rows() > 0) {
            return TRUE;
        }
        return FALSE;
    }

    public function code_en_attente($code, $id_utilisateur)
    {
        $code_id = $this->code_existe($code);
        if($code_id === -1) {
            return FALSE;
        }
        $this->db->where('id_utilisateur', $id_utilisateur);
        $this->db->where('id_code', $code_id);
        $this->db->order_by('date_implementation', 'DESC');
        $query = $this->db->get('insertion_code');
        if($query->num_rows() === 0) {
            return FALSE;
        }
        $row = $query->row();

        if($row->etat == 0) {
            return TRUE;
        }
        return FALSE;
    }

    public function code_confirme($code, $id_utilisateur)
    {
        $code_id = $this->code_existe($code);
        if($code_id === -1) {
            return FALSE;
        }
        $this->db->where('id_utilisateur', $id_utilisateur);
        $this->db->where('id_code', $code_id);
        $this->db->order_by('date_implementation', 'DESC');
        $query = $this->db->get('insertion_code');
        if($query->num_rows() === 0) {
            return FALSE;
        }
        $row = $query->row();
        if($row->etat == 10) {
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


    public function porte_feuille_par_utilisateur(){
        $id_porte_feuille = $this->session->userdata('user_id_porte_feuille');
        $this->db->where('id_porte_feuille', $id_porte_feuille);
        $query = $this->db->get('porte_feuille');
        $result = $query->result_array();
        return $result[0];
    }

    public function transactions()
    {
        $id_porte_feuille = $this->session->userdata('user_id_porte_feuille');
        $this->db->where('id_porte_feuille', $id_porte_feuille);
        $query = $this->db->get('transaction_porte_feuille');
        $result = $query->result_array();
        return $result;
    }
}