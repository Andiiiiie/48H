<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Code extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('code_model');
    }

    public function insertion(){
        $data['errors']=array();
        $this->load->view('back/templates/header');
        $this->load->view('back/templates/navbar');
        $this->load->view('back/templates/sidebar');
        $this->load->view('back/code/insertion',$data);
        $this->load->view('back/templates/copyright');
        $this->load->view('back/templates/footer');
    }


    public function save()
    {
        $this->form_validation->set_rules('code', 'Code', 'trim|required|is_unique[code.code]');
        $this->form_validation->set_rules('montant', 'Montant', 'trim|required');

        if($this->form_validation->run() === FALSE) {
            $data['errors'] = $this->form_validation->error_array();
            $this->load->view('back/templates/header');
            $this->load->view('back/templates/navbar');
            $this->load->view('back/templates/sidebar');
            $this->load->view('back/code/insertion',$data);
            $this->load->view('back/templates/copyright');
            $this->load->view('back/templates/footer');
        } else {
            $data['test'] = $this->code_model->save_code();
            $this->session->set_flashdata('success', array('Votre code a été créé avec succès'));
            redirect('back/code/liste');
        }
    }

    public function liste()
    {
        $data['codes']=$this->code_model->get_all();
        $this->load->view('back/templates/header');
        $this->load->view('back/templates/navbar');
        $this->load->view('back/templates/sidebar');
        $this->load->view('back/code/liste',$data);
        $this->load->view('back/templates/copyright');
        $this->load->view('back/templates/footer');

    }
}