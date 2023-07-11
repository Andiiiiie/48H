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

        public function get_utilisateur($id_utilisateur)
        {
            $this->db->where('id_utilisateur', $id_utilisateur);
            $query = $this->db->get('utilisateur');
            return $query->result_array();
        }

        public function get_code($id_code)
        {
            $this->db->where('id_code', $id_code);
            $query = $this->db->get('code');
            return $query->result_array();
        }

        public function get_code_a_valide()
        {
            $this->db->where('etat', 0);
            $query = $this->db->get('insertion_code');
            $result = $query->result_array();
            foreach ($result as &$row) {
                $utilisateur = $this->get_utilisateur($row['id_utilisateur']);
                $row['utilisateur'] = $utilisateur[0];
                $code = $this->get_code($row['id_code']);
                $row['code'] = $code[0];
            }
            return $result;
        }

        public function get_insertion_code($id_insertion_code)
        {
            $code_a_valide = $this->get_code_a_valide();
            foreach ($code_a_valide as $row) {
                if ($row['id_insertion_code'] == $id_insertion_code) {
                    return $row;
                }
            }
            return null;
        }

        public function valider($insertion_code)
        {
            $data = array(
                'etat' => 10
            );
            $this->db->where('id_insertion_code', $insertion_code);
            $this->db->update('insertion_code', $data);
        }

        public function refuser($insertion_code)
        {
            $data = array(
                'etat' => -10
            );
            $this->db->where('id_insertion_code', $insertion_code);
            $this->db->update('insertion_code', $data);
        }
    }
