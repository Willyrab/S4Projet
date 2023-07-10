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
    }

    public function validation()
    {
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
