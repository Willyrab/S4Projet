<?php
defined('BASEPATH') or exit('No direct script access allowed');
//require_once("BaseSession.php");
class Calendrier_controller extends CI_Controller
{

    //? maka idpbjectif loa 
    public function take_ID()
    {
        $idregime = $this->input->post('id');

        $this->session->set_userdata('regime', $idregime);
        var_dump($_SESSION);
    }
    public function take_ID_objectif($id = 1)
    {
        //maka av an am suivre
        $idregime = $this->input->post('id');
        if (isset($idregime)) {

            $this->session->set_userdata('regime', $idregime);
        }


        $idr = $_SESSION['regime'][0];

        $this->load->model('Objet');

        $data = array();
        $data['jours'] = $this->Objet->getAlljour();
        $data['details'] = $this->Objet->getDetailRegime($idr, $id);

        $this->load->helper('url');

        if ($id == 1) {
            $this->load->view('Front-Office/lundi', $data);
        } elseif ($id == 2) {
            $this->load->view('Front-Office/mardi', $data);
        } elseif ($id == 3) {
            $this->load->view('Front-Office/mercredi', $data);
        } elseif ($id == 4) {
            $this->load->view('Front-Office/jeudi', $data);
        } elseif ($id == 5) {
            $this->load->view('Front-Office/vendredi', $data);
        } elseif ($id == 6) {
            $this->load->view('Front-Office/samedi', $data);
        } else {
            $this->load->view('Front-Office/dimanche', $data);
        }
    }
    public function show_calendrier()
    {
        // var_dump($this->session);
        $this->load->helper('url');


        $this->load->model('Objet');

        $data = array();
        $data['jours'] = $this->Objet->getAlljour();

        $this->load->helper('url');
        $this->load->view('Front-Office/calendrier', $data);
    }
}
