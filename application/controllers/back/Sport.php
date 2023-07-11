<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sport extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('sport_model');
    }

    public function insertion(){
        $data['errors']=array();

        $data['errors'] = array();
        $this->form_validation->set_rules('designation', 'Designation', 'trim|required');

        if ($this->form_validation->run() == true) {
            $config['upload_path'] = 'uploads/sport/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = true;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image_path')) {
                $uploadData = $this->upload->data();
                $fileUrl =  $config['upload_path'] . $uploadData['file_name'];
                $this->sport_model->save_sport($this->input->post('designation'), $fileUrl);
                $this->session->set_flashdata('success', array("Sport ok"));
                redirect('back/sport/liste');
            } else {
                $error = $this->upload->display_errors();
                $data['errors']['save_path'] = $error;
            }
        } else {
            $data['errors'] = $this->form_validation->error_array();
        }

        $this->load->view('back/templates/header');
        $this->load->view('back/templates/navbar');
        $this->load->view('back/templates/sidebar');
        $this->load->view('back/sport/insertion', $data);
        $this->load->view('back/templates/footer');
    }




    public function liste()
    {
        $data['sports']=$this->sport_model->get_all();
        $this->load->view('back/templates/header');
        $this->load->view('back/templates/navbar');
        $this->load->view('back/templates/sidebar');
        $this->load->view('back/sport/liste',$data);
        $this->load->view('back/templates/copyright');
        $this->load->view('back/templates/footer');

    }


    public function modifier($id_sport)
    {
        $data['errors'] = array();
        $sport = $this->sport_model->get_sport($id_sport);
        if($sport == null)
            show_404();
        $data['sport'] = $sport;
        $this->form_validation->set_rules('designation', 'Designation', 'trim|required');

        if ($this->form_validation->run() == true) {
            $config['upload_path'] = 'uploads/composition/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = true;

            $this->load->library('upload', $config);

            if (!empty($_FILES['image_path']['name'])) {
                if ($this->upload->do_upload('image_path')) {
                    $uploadData = $this->upload->data();
                    unlink($sport['image_path']);
                    $fileUrl =  $config['upload_path'] . $uploadData['file_name'];
                    $this->sport_model->modifier($id_sport, $this->input->post('designation'), $fileUrl);
                    $this->session->set_flashdata('success', array("Sport modifiée"));
                    redirect('back/sport/liste');
                } else {
                    $error = $this->upload->display_errors();
                    $data['errors']['image_path'] = $error;
                }
            } else {
                $this->sport_model->modifier($id_sport, $this->input->post('designation'), $sport['image_path']);
                $this->session->set_flashdata('success', array("Sport modifiée"));
                redirect('back/sport/liste');
            }
        } else {
            $data['errors'] = $this->form_validation->error_array();
        }

        $this->load->view('back/templates/header');
        $this->load->view('back/templates/navbar');
        $this->load->view('back/templates/sidebar');
        $this->load->view('back/sport/modifier', $data);
        $this->load->view('back/templates/footer');
    }

    public function supprimer($id_sport)
    {
        $sport = $this->sport_model->get_sport($id_sport);
        if($sport == null)
            show_404();
        $data['sport'] = $sport;

        if($this->input->server('REQUEST_METHOD') == 'POST') {
            unlink($sport['image_path']);
            $this->sport_model->supprimer($id_sport);
            $this->session->set_flashdata('success', array("Sport supprimée"));
            redirect('back/sport/liste');
        }

        $this->load->view('back/templates/header');
        $this->load->view('back/templates/navbar');
        $this->load->view('back/templates/sidebar');
        $this->load->view('back/sport/supprimer', $data);
        $this->load->view('back/templates/footer');
    }
}