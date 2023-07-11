<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('utilisateur_model');
    }

    public function index()
    {
        $data = array(
            'nb_utilisateur' => $this->utilisateur_model->get_nb_utilisateur(),
            'taux_conversion' => $this->utilisateur_model->taux_conversion(),
            'montant_moyen' => $this->utilisateur_model->montant_moyen(),
            'moyenne_objectif' => $this->utilisateur_model->moyenne_objectif(),
        );

        $this->load->view('back/templates/header');
        $this->load->view('back/templates/navbar');
        $this->load->view('back/templates/sidebar');
        $this->load->view('back/dashboard/utilisateur', $data); # ito no copier na de ovaina miova
        $this->load->view('back/templates/copyright');
        $this->load->view('back/templates/footer');
    }
}