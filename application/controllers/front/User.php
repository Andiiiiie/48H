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

    }
?>