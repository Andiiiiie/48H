<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('front/templates/header');
        $this->load->view('front/templates/navbar');
        $this->load->view('front/templates/sidebar');
        $this->load->view('front/templates/settings-panel');
        $this->load->view('front/templates/dashboard'); # ito no copier na de ovaina miova
        $this->load->view('front/templates/copyright');
        $this->load->view('front/templates/footer');
    }
}