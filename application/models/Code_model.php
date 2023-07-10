<?php
    class Code_model extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        public function obtenir_tous_les_codes(){
            $this->db->select('*');
            $this->db->from('code');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function save_code()
        {
            $this->db->trans_start();
            // Création nouveau porte feuille

            // Création utilisateur
            $data = array(
                'code' => $this->input->post('code'),
                'montant' => $this->input->post('montant'),
            );
            $this->db->insert('code', $data);

            $this->db->trans_complete();
        }

        public function get_all()
        {
            $this->db->select('*');
            $this->db->from('code');
            $query = $this->db->get();
            return $query->result_array();
        }
    }
?>