<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once("BaseSession.php");

class AccueilController extends CI_Controller
{
    public function show_accueil()
    {
        $this->load->helper('url');
        $this->load->view('Front-Office/acceuil');
    }
}
