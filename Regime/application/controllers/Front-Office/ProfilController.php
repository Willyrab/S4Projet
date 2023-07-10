<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once("BaseSession.php");

class ProfilController extends CI_Controller
{

    //completion du profil de l utilisateur
    public function show_completion()
    {
        $this->load->helper('url');
        $this->load->view('Front-Office/completion');
    }

    public function addCompletion()
    {
        date_default_timezone_set('Africa/Nairobi');
        //prend l id de l utilsateur en session
        var_dump($_SESSION);
        $id = $_SESSION['utilisateur'][0]['id'];

        $taille = $this->input->post('taille');
        $poids = $this->input->post('poids');

        $now = new DateTime();
        $date_locale = $now->format('Y-m-d');
        $heure_locale = $now->format('H:i:s');
        $this->load->model('Objet');

        //insertion de l utilisateur
        $this->Objet->addtaille($id, $date_locale, $taille);

        $this->Objet->addpoids($id, $date_locale, $poids);


        $this->load->helper('url');
        redirect('Front-Office/ProfilController/show_profil');
    }

    public function show_profil()
    {
        //prend l id de l utilsateur en session
        $id = $_SESSION['utilisateur'][0]['id'];

        $this->load->model('Objet');
        $data = array();
        $data['profils'] = $this->Objet->getCompletion($id);
        $this->load->helper('url');
        $this->load->view('Front-Office/information', $data);
    }
}
