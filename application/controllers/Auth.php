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
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required|is_unique[utilisateur.email]');
        $this->form_validation->set_rules('motDePasse', 'Mot de passe', 'trim|required|min_length[4]');

        if($this->form_validation->run() === FALSE) {
            $data['errors'] = $this->form_validation->error_array();
            $this->load->view('templates/front_header');
            $this->load->view('front/auth/inscription', $data);
            $this->load->view('templates/front_footer');
        } else {
            $data['test'] = $this->utilisateur_model->inscription();
            $this->load->view('welcome_message');
        }
    }
}
