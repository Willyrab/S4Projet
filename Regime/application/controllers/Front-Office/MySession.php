<?php
defined('BASEPATH') or exit('No direct script access allowed');    //protection fichier
class Mysession extends CI_Controller
{

    //grader en ession l in formation de l utilisateur
    public function profil()
    {
        $all['all'] = $_SESSION['utilisateur'];
        // var_dump($all);

        //donnees loader ver la view Profil
        $this->load->view('Front-Office/Profil/monprofil', $all);
    }

    //deconnection
    public function logout()
    {
        //deconnection
        unset($_SESSION['utilisateur']);
        redirect('Front-Office/LoginController/showLogin');
    }
}
