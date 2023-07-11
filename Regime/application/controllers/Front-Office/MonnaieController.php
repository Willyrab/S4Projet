<?php
defined('BASEPATH') or exit('No direct script access allowed');
//require_once("BaseSession.php");

class MonnaieController extends CI_Controller
{

    public function show_monnaie()
    {
        // var_dump($this->session);
        $this->load->helper('url');
        $this->load->view('Front-Office/monnaie');
    }

    public function show_verifier()
    {
        // var_dump($this->session);
        $this->load->helper('url');
        $this->load->view('Front-Office/verifier');
    }

    public function verification()
    {
        $idUtilisateur = $_SESSION['utilisateur'][0]['id'];

        $this->load->model('Objet');

        $code = $this->input->post('code');

        $resultat = $this->Objet->verifierCode($code);

        if ($resultat) {
            // Le code existe
            $code = $resultat->code;

            // Insérer l'ID du code dans la table demandeRecharge
            $idCode = $resultat->id;

            // Définit le fuseau horaire
            date_default_timezone_set('Europe/Paris');

            // Appeler la fonction addrecharge() du modèle pour insérer la recharge
            $this->Objet->addrecharge(date('Y-m-d'), $idCode, $idUtilisateur);

            $this->load->helper('url');
            redirect('Front-Office/MonnaieController/show_verifier');
        } else {
            // Le code n'existe pas
            echo "Code invalide";
        }
    }


    public function soldes()
    {
        $idUtilisateur = $_SESSION['utilisateur'][0]['id'];

        $this->load->model('Objet');

        $data = array();
        $data['soldes'] = $this->Objet->getSolde($idUtilisateur);

        $this->load->helper('url');
        $this->load->view('Front-Office/soldes', $data);
    }
}
