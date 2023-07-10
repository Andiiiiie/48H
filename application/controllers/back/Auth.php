<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('utilisateur_model');
    }

    public function connexion()
    {
        $this->load->view('back/templates/header');
        $this->load->view('back/auth/connexion');
        $this->load->view('back/templates/footer');
    }
}