<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Porte_monnaie extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('utilisateur_model');
        $this->load->model('porte_monnaie_model');
    }

    public function ajouter()
    {
        $this->form_validation->set_rules('code', 'Code', 'required|trim');
        $data['error'] = array();
        if ($this->form_validation->run() === TRUE) {
                if($this->utilisateur_model->ajouter_credit($this->input->post('code'), $data) === TRUE) {
                    $this->session->set_flashdata('success', array('Crédit en attente de validation'));
                    redirect('front/porte_monnaie/ajouter');
                } else {
                    $data['error'] = array('code' => 'Votre code est invalide');
                }
        } else {
            $data['error'] = $this->form_validation->error_array();
        }
        $data['codes'] = $this->porte_monnaie_model->get_liste_code();
        $this->load->view('front/templates/header');
        $this->load->view('front/templates/navbar');
        $this->load->view('front/templates/sidebar');
        $this->load->view('front/porte_monnaie/ajouter', $data);
        $this->load->view('front/templates/footer');
    }

    public function mon_compte(){
        $data['porte_feuilles'] = $this->porte_monnaie_model->porte_feuille_par_utilisateur();
        $data['transactions']=$this->porte_monnaie_model->transactions();
        $this->load->view('front/templates/header');
        $this->load->view('front/templates/navbar');
        $this->load->view('front/templates/sidebar');
        $this->load->view('front/porte_monnaie/mon_porte_feuille', $data);
        $this->load->view('front/templates/footer');
    }
}