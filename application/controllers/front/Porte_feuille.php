<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Porte_feuille extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('porte_feuille_model');
        }
        public function mon_porte_feuille(){
            $data['porte_feuilles'] = $this->porte_feuille_model->porte_feuille_par_utilisateur();
            $this->load->view('front/templates/header');
            $this->load->view('front/porte_feuille/mon_porte_feuille', $data);
            $this->load->view('front/templates/footer');
        }
    }
?>