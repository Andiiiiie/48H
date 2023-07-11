<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('porte_monnaie_model');
    }

    public function index()
    {
        $data = array(
            'montant' => $this->porte_monnaie_model->porte_feuille_par_utilisateur(),
            'nb_code' => $this->porte_monnaie_model->count_utilisable(),
            'nb_regime' => $this->porte_monnaie_model->count_regime(),
        );

        $this->load->view('front/templates/header');
        $this->load->view('front/templates/navbar');
        $this->load->view('front/templates/sidebar');
        $this->load->view('front/templates/settings-panel');
        $this->load->view('front/templates/dashboard', $data); # ito no copier na de ovaina miova
        $this->load->view('front/templates/copyright');
        $this->load->view('front/templates/footer');
    }
}