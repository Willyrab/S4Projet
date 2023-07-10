<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once("BaseSession.php");
class LoginController extends CI_Controller
{


    //? afficher login
    public function showLogin()
    {
        $this->load->helper('url');
        $this->load->view('Front-Office/login');
    }

    //?afficher inscription
    public function showInscription()
    {
        $this->load->model('Objet');
        $data = array();
        $data['genres'] = $this->Objet->getAllGenre();
        $this->load->helper('url');
        $this->load->view('Front-Office/inscription', $data);
    }

    //*se connecter
    public function signin()
    {
        $email = $this->input->post('email');
        $mdp = $this->input->post('mdp');

        $this->load->model('Objet');
        $this->Objet->check_password($email, $mdp);

        //pour gerder en session l information de l utilisateur
        $utilisateur = $this->Objet->findUser($email);

        $_SESSION['utilisateur'] = $utilisateur;
        $idUtilisateur = $utilisateur->idutilisateur;
        $this->session->set_userdata('user', $idUtilisateur);

        $this->load->helper('url');
        redirect('Front-Office/AccueilController/show_accueil');
    }

    //s'inscrire
    public function signup()
    {
        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
        $datedenaissance = $this->input->post('datedenaissance');
        $adresse = $this->input->post('adresse');
        $ville = $this->input->post('ville');
        $telephone = $this->input->post('telephone');

        $email = $this->input->post('email');
        $genre = $this->input->post('genre');
        $mdp = $this->input->post('mdp');



        $this->load->model('Objet');

        //insertion de l utilisateur
        $this->Objet->addUser($nom, $prenom, $datedenaissance, $adresse, $ville, $telephone, $email, $mdp, $genre);



        //insertion de profil


        $this->load->helper('url');
        redirect('Front-Office/LoginController/showLogin');
    }
}
