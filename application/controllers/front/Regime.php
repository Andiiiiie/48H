<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Regime extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('regime_model');
            if(!$this->session->userdata('user_nom')){
                redirect('front/auth/connexion');
            }
        }
        
        public function generate_pdf(){
            $this->load->model("PDF");
            $pdf = new PDF();
            $pdf->getPDF($data);
        }

        public function s_inscrire($id_regime){
            $this->regime_model->insertion_regime($id_regime);
        }

        public function mon_regime(){
            $data = array();
            try{
                $data['regimes'] = $this->regime_model->regime_par_utilisateur();
            }
            catch(Exception $e){
                $this->session->set_flashdata('error', array($e->getMessage()));
            }
            $this->load->view('front/templates/header');
            $this->load->view('front/templates/navbar');
            $this->load->view('front/templates/sidebar');
            $this->load->view('front/templates/blank');
            $this->load->view('front/regime/mon_regime', $data);
            $this->load->view('front/templates/footer');
        }

        public function proposition_regime(){
            $this->load->view('front/templates/header');
            $this->load->view('front/templates/navbar');
            $this->load->view('front/templates/sidebar');
            $this->load->view('front/templates/blank');
            $data = array();
            try{
                $data['regimes'] = $this->regime_model->obtenir_regime_optimisee("ASC");
                $data['regime_tarif'] = $this->regime_model->identifier_regime_valiede($data['regimes']['id_regime']);
                $this->load->view('front/regime/proposition_regime', $data);
            }
            catch(Exception $e){
                $this->session->set_flashdata('error', array($e->getMessage()));
                $this->load->view('front/regime/proposition_regime');
            }
            $this->load->view('front/templates/footer');
        }

        public function details_regime($id_regime){
            $regimes = $this->regime_model->regime_par_utilisateur();
            $plats = $this->regime_model->plat_du_regime($id_regime);
            $activites = $this->regime_model->activite_du_regime($id_regime);
            $data["plats"] = $plats;
            $data["activites"] = $activites;
            $data["regimes"] = $regimes;	
            $this->load->view('front/templates/header');
            $this->load->view('front/templates/navbar');
            $this->load->view('front/templates/sidebar');
            $this->load->view('front/templates/blank');
            $this->load->view('front/regime/details_regime', $data);
            $this->load->view('front/templates/footer');
        }

        public function inserer_details(){
            $this->load->model('parametres_model');
            $data['parametres'] = $this->parametres_model->obtenir_tous_les_parametres();
            $this->load->view('front/templates/header');
            $this->load->view('front/templates/navbar');
            $this->load->view('front/templates/sidebar');
            $this->load->view('front/templates/blank');
            $this->load->view('front/user/inserer_details', $data);
            $this->load->view('front/templates/footer');
        }
    }
?>