<?php

class Plat_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_compositions()
    {
        $query = $this->db->get('plat_detail');
        return $query->result_array();
    }

    public function get_composition($id_composition)
    {
        $query = $this->db->get_where('plat_detail', array('id_plat_detail' => $id_composition));
        if($query->num_rows() == 0) {
            return null;
        }
        return $query->row_array();
    }

    public function insert_composition($composition, $fileUrl)
    {
        $data = array(
            'composition' => $composition,
            'image_path' => $fileUrl
        );
        $this->db->insert('plat_detail', $data);
    }

    public function modifier_composition($id_composition, $composition, $fileUrl)
    {
        $data = array(
            'composition' => $composition,
            'image_path' => $fileUrl
        );
        $this->db->where('id_plat_detail', $id_composition);
        $this->db->update('plat_detail', $data);
    }

    public function supprimer_composition($id_composition)
    {
        $this->db->where('id_plat_detail', $id_composition);
        $this->db->delete('plat_detail');
    }
}