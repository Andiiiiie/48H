<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('administrateur_model');
    }

    public function connexion()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');
        $this->form_validation->set_rules('motDePasse', 'Mot de passe', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data['errors'] = $this->form_validation->error_array();
            $this->load->view('back/auth/connexion', $data);
        } else {
            if($this->administrateur_model->connexion() === FALSE) {
                $this->session->set_flashdata('error', array('Email ou mot de passe incorrect'));
                redirect('back/auth/connexion');
            } else {
                redirect('back/dashboard');
            }
        }
    }

    public function deconnexion()
    {
        $this->session->sess_destroy();
        redirect('back/auth/connexion');
    }
}