<?php
class Sport_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all(){
        $this->db->select('*');
        $this->db->from('activite');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function save_sport($designation,$save_path)
    {
        $this->db->trans_start();
        // Création nouveau porte feuille

        // Création utilisateur
        $data = array(
            'designation' =>$designation,
            'image_path' => $save_path,
        );
        $this->db->insert('activite', $data);

        $this->db->trans_complete();
    }

    public function get_sport($id_sport)
    {
        $query = $this->db->get_where('activite', array('id_ACTIVITE' => $id_sport));
        if($query->num_rows() == 0) {
            return null;
        }
        return $query->row_array();
    }


    public function supprimer($id_sport)
    {
        $this->db->where('id_ACTIVITE', $id_sport);
        $this->db->delete('activite');
    }


    public function modifier($id_sport, $designation, $fileUrl)
    {
        $data = array(
            'designation' => $designation,
            'image_path' => $fileUrl
        );
        $this->db->where('id_ACTIVITE', $id_sport);
        $this->db->update('activite', $data);
    }


}
?>