<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CodeRechargeController extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $data['content'] = 'Back-Office/ajout-code';
        $this->load->view('Back-Office/template', $data);
    }

    public function ajouter()
    {
        $this->load->model('codeRecharge');
        $post = $this->input->post();
        $options_echappees = array(
            'code' => $post['code'],
            'valeur' => $post['valeur'],
            'etat' => 1
        );
        $options_non_echappees = array(
            'id' => 'default'
        );
        $this->codeRecharge->create($options_echappees, $options_non_echappees);
        redirect('Back-Office/codeRechargeController');
    }

    public function checkIfExists()
    {
        $this->load->model('codeRecharge');
        $exists = $this->codeRecharge->getAll('*', 'code = \'' . $_POST['string'] . '\'');
        echo json_encode(!empty($exists));
    }

    public function validerRecharge($idCode, $idUtilisateur, $variation)
    {
        $this->load->model('codeRecharge');
        $this->load->model('codeValide');
        $this->load->model('porteMonnaie');
        $this->codeRecharge->update($idCode, array('etat' => 11));
        $this->codeValide->valider($idCode);
        $this->porteMonnaie->addMoney($idUtilisateur, $variation);
        redirect('Back-Office/codeRechargeController/validation');
    }

    public function refuserRecharge($idCode)
    {
        $this->load->model('codeRecharge');
        echo intval(array('id' => 5));
        $this->codeRecharge->update($idCode, array('etat' => -11));
        redirect('Back-Office/codeRechargeController/validation');
    }

    public function validation()
    {
        $this->load->model('demandeRecharge');
        $data['demandes'] = $this->demandeRecharge->getAllDemandes();
        $data['content'] = 'Back-Office/validation-code';
        $this->load->view('Back-Office/template', $data);
    }

    public function liste()
    {
        $this->load->model('codeRecharge');
        $data['codes'] = $this->codeRecharge->getAllObjects();
        $data['content'] = 'Back-Office/liste-code';
        $this->load->view('Back-Office/template', $data);
    }
}
