<?php
    class Parametres_model extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        function obtenir_tous_les_parametres(){
            $this->db->select('*');
            $this->db->from('parametres');
            $query = $this->db->get();
            return $query->result_array();
        }
    }
?>