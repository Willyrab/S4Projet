<?php
defined('BASEPATH') or exit('No direct script access allowed');
//require_once("BaseSession.php");

class IMC_controller extends CI_Controller
{
    public function show_imc()
    {
        // var_dump($this->session);
        $this->load->helper('url');
        $this->load->view('Front-Office/imc');
    }
}
