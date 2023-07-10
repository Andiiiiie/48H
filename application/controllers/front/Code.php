<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Code extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Code_model');
    }

    public function index(){
        $codes = $this->Code_model->obtenir_tous_les_codes();
        $data['codes'] = $codes;
        $this->load->view('front/templates/header');
        $this->load->view('front/templates/navbar');
        $this->load->view('front/templates/sidebar');
        $this->load->view('front/porte_feuille/recharger_porte_feuille', $data);
        $this->load->view('front/templates/footer');
    }
}