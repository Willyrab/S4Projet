<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
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
        $data['message'] = '';
        $this->load->view('Back-Office/page-login', $data);
    }

    public function authentificate()
    {
        $this->load->model('admin');
        $post = $this->input->post();
        $compte = $this->admin->authentificate($post);
        if ($compte == null) {
            redirect('Back-Office/login/error');
        }
        $this->session->set_userdata('compte', $compte);
        redirect('Back-Office/accueil');
    }

    public function error()
    {
        $data['message'] = 'Ce compte administrateur n\' existe pas';
        $this->load->view('Back-Office/page-login', $data);
    }
}
