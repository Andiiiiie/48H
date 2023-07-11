<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class User extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('Details_patient_model');
        }

        public function inserer_parametres(){
            $this->Details_patient_model->inserer_details();
            redirect("front/regime/inserer_details");
        }

        public function pass_to_gold(){
            $this->load->view('front/templates/header');
            $this->load->view('front/templates/navbar');
            $this->load->view('front/templates/sidebar');
            $this->load->view('front/templates/blank');
            $this->load->view('front/user/gold');
            $this->load->view('front/templates/footer');
        }
        public function process_gold(){
            $this->Details_patient_model->process_to_gold();
            redirect("front/user/pass_to_gold");
        }
    }
?>