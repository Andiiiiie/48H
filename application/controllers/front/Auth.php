<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('utilisateur_model');
    }

    public function inscription()
    {
        $this->form_validation->set_rules('nom', 'Nom', 'trim|required');
        $this->form_validation->set_rules('prenom', 'Prénom', 'trim|required');
        $this->form_validation->set_rules('date_de_naissance', 'Date de naissance', 'trim|valid_date|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required|is_unique[utilisateur.email]');
        $this->form_validation->set_rules('motDePasse', 'Mot de passe', 'trim|required|min_length[4]');

        if($this->form_validation->run() === FALSE) {
            $data['errors'] = $this->form_validation->error_array();
            $this->load->view('front/templates/header');
            $this->load->view('front/auth/inscription', $data);
            $this->load->view('front/templates/footer');
        } else {
            $data['test'] = $this->utilisateur_model->inscription();
            $this->session->set_flashdata('success', array('Votre compte a été créé avec succès'));
            redirect('front/dashboard');
        }
    }

    public function connexion()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');
        $this->form_validation->set_rules('motDePasse', 'Mot de passe', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data['errors'] = $this->form_validation->error_array();
            $this->load->view('front/templates/header');
            $this->load->view('front/auth/connexion', $data);
            $this->load->view('front/templates/footer');
        } else {
            if($this->utilisateur_model->connexion('front') === FALSE) {
                $this->session->set_flashdata('error', array('Email ou mot de passe incorrect'));
                redirect('front/auth/connexion');
            } else {
                redirect('front/dashboard');
            }
        }
    }

    public function deconnexion()
    {
        $this->session->sess_destroy();
        redirect('front/auth/connexion');
    }
}
