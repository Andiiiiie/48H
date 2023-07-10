<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('back/templates/header');
        $this->load->view('back/templates/navbar');
        $this->load->view('back/templates/sidebar');
        $this->load->view('back/templates/blank'); # ito no copier na de ovaina miova
        $this->load->view('back/templates/copyright');
        $this->load->view('back/templates/footer');
    }
}