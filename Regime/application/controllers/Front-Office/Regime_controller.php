<?php
defined('BASEPATH') or exit('No direct script access allowed');
//require_once("BaseSession.php");

class Regime_Controller extends CI_Controller
{
    //? afficher l'objectif
    public function show_regime()
    {
        $this->load->model('Objet');
        $data = array();
        $data['objectifs'] = $this->Objet->getAllObjectif();


        $this->load->helper('url');
        $this->load->view('Front-Office/regime', $data);
    }

    public function valid_objectif()
    {
        //prend l objectif choisi par l utilisateur
        $idObjectif = $this->input->post('objectif');

        $this->load->model('Objet');

        $data = array();

        $data['regimes'] = $this->Objet->getRegime($idObjectif);

        if ($idObjectif == 1) {

            $this->load->helper('url');
            $this->load->view('Front-Office/augmenterPoids', $data);
        } else {
            $this->load->helper('url');
            $this->load->view('Front-Office/perdrePoids', $data);
        }
    }




    //fonction qui montre le detailRegime de l utilisateur
    public function detailRegime()
    {
    }

    public function show_prendrePoids()
    {

        $this->load->helper('url');
        $this->load->view('Front-Office/augmenterPoids');
    }
    public function show_diminuerPoids()
    {

        $this->load->helper('url');
        $this->load->view('Front-Office/perdrePoids');
    }
}
