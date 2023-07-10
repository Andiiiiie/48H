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
    }
?>