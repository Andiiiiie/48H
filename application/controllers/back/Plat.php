<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Plat extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('plat_model');
    }

    public function compositions()
    {
        $data['compositions'] = $this->plat_model->get_compositions();
        $this->load->view('back/templates/header');
        $this->load->view('back/templates/navbar');
        $this->load->view('back/templates/sidebar');
        $this->load->view('back/plat/compositions', $data);
        $this->load->view('back/templates/footer');
    }

    public function ajout_composition()
    {
        $data['errors'] = array();
        $this->form_validation->set_rules('composition', 'Composition', 'trim|required');

        if ($this->form_validation->run() == true) {
            $config['upload_path'] = 'uploads/composition/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = true;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('userfile')) {
                $uploadData = $this->upload->data();
                $fileUrl =  $config['upload_path'] . $uploadData['file_name'];
                $this->plat_model->insert_composition($this->input->post('composition'), $fileUrl);
                $this->session->set_flashdata('success', array("Composition ok"));
                redirect('back/plat/compositions');
            } else {
                $error = $this->upload->display_errors();
                $data['errors']['userfile'] = $error;
            }
        } else {
            $data['errors'] = $this->form_validation->error_array();
        }

        $this->load->view('back/templates/header');
        $this->load->view('back/templates/navbar');
        $this->load->view('back/templates/sidebar');
        $this->load->view('back/plat/form_composition', $data);
        $this->load->view('back/templates/footer');
    }

    public function modifier_composition($id_composition)
    {
        $data['errors'] = array();
        $composition = $this->plat_model->get_composition($id_composition);
        if($composition == null)
            show_404();
        $data['composition'] = $composition;
        $this->form_validation->set_rules('composition', 'Composition', 'trim|required');

        if ($this->form_validation->run() == true) {
            $config['upload_path'] = 'uploads/composition/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = true;

            $this->load->library('upload', $config);

            if (!empty($_FILES['userfile']['name'])) {
                if ($this->upload->do_upload('userfile')) {
                    $uploadData = $this->upload->data();
                    unlink($composition['image_path']);
                    $fileUrl =  $config['upload_path'] . $uploadData['file_name'];
                    $this->plat_model->modifier_composition($id_composition, $this->input->post('composition'), $fileUrl);
                    $this->session->set_flashdata('success', array("Composition modifiée"));
                    redirect('back/plat/compositions');
                } else {
                    $error = $this->upload->display_errors();
                    $data['errors']['userfile'] = $error;
                }
            } else {
                $this->plat_model->modifier_composition($id_composition, $this->input->post('composition'), $composition['image_path']);
                $this->session->set_flashdata('success', array("Composition modifiée"));
                redirect('back/plat/compositions');
            }
        } else {
            $data['errors'] = $this->form_validation->error_array();
        }

        $this->load->view('back/templates/header');
        $this->load->view('back/templates/navbar');
        $this->load->view('back/templates/sidebar');
        $this->load->view('back/plat/form_composition_modifier', $data);
        $this->load->view('back/templates/footer');
    }

    public function supprimer_composition($id_composition)
    {
        $composition = $this->plat_model->get_composition($id_composition);
        if($composition == null)
            show_404();
        $data['composition'] = $composition;

        if($this->input->server('REQUEST_METHOD') == 'POST') {
            unlink($composition['image_path']);
            $this->plat_model->supprimer_composition($id_composition);
            $this->session->set_flashdata('success', array("Composition supprimée"));
            redirect('back/plat/compositions');
        }

        $this->load->view('back/templates/header');
        $this->load->view('back/templates/navbar');
        $this->load->view('back/templates/sidebar');
        $this->load->view('back/plat/supprimer_composition', $data);
        $this->load->view('back/templates/footer');
    }

    public function insertion()
    {
        $data['errors'] = array();
        $this->form_validation->set_rules('designation', 'Designation', 'trim|required');

        if ($this->form_validation->run() == true) {
            $config['upload_path'] = 'uploads/composition/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = true;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('userfile')) {
                $uploadData = $this->upload->data();
                $fileUrl =  $config['upload_path'] . $uploadData['file_name'];

                $ingredients = $this->input->post('ingredient');
                // Vérifier si des ingrédients ont été sélectionnés
                if (!empty($ingredients)) {
                    // Parcourir les ingrédients sélectionnés
                    foreach ($ingredients as $ingredient) {
                        echo $ingredient; // Faites ce que vous voulez avec chaque ingrédient
                    }
                } else {
                    echo "Aucun ingrédient sélectionné.";
                }

                $this->plat_model->insert_composition($this->input->post('composition'), $fileUrl);
                $this->session->set_flashdata('success', array("Composition ok"));
                redirect('back/plat/compositions');
            } else {
                $error = $this->upload->display_errors();
                $data['errors']['userfile'] = $error;
            }
        } else {
            $data['errors'] = $this->form_validation->error_array();
        }


        $this->load->view('back/templates/header');
        $this->load->view('back/templates/navbar');
        $this->load->view('back/templates/sidebar');
        $this->load->view('back/plat/insertion', $data);
        $this->load->view('back/templates/footer');
    }
}
