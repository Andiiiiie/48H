<?php
    class Porte_feuille_model extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        public function porte_feuille_par_utilisateur(){
            $id_porte_feuille = $this->session->userdata('user_id_porte_feuille');
            $this->db->where('id_porte_feuille', $id_porte_feuille);
            $query = $this->db->get('porte_feuille');
            $result = $query->result_array();
            return $result[0];
        }
    }
?>