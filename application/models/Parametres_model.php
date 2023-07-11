<?php
    class Parametres_model extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        function obtenir_tous_les_parametres(){
            $id_utilisateur = $this->session->userdata('user_id');
            $sql = "SELECT * FROM parametres";
            $query = $this->db->query($sql);
            return $query->result_array();
        }
    }
?>