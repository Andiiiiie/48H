<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Regime extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('regime_model');
        }

        public function mon_regime(){
            $data['regimes'] = $this->regime_model->regime_par_utilisateur();
            $this->load->view('front/templates/header');
            $this->load->view('front/templates/navbar');
            $this->load->view('front/templates/sidebar');
            $this->load->view('front/regime/mon_regime', $data);
            $this->load->view('front/templates/footer');
        }

        public function proposition_regime(){
            $data['regimes'] = $this->regime_model->random_regime();
            $this->load->view('front/templates/header');
            $this->load->view('front/templates/navbar');
            $this->load->view('front/templates/sidebar');
            $this->load->view('front/regime/proposition_regime', $data);
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
            $this->load->view('front/regime/details_regime', $data);
            $this->load->view('front/templates/footer');
        }

        public function inserer_details(){
            $this->load->model('parametres_model');
            $data['parametres'] = $this->parametres_model->obtenir_tous_les_parametres();
            $this->load->view('front/templates/header');
            $this->load->view('front/templates/navbar');
            $this->load->view('front/templates/sidebar');
            $this->load->view('front/user/inserer_details', $data);
            $this->load->view('front/templates/footer');
        }
    }
?>