<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SportActivityController extends CI_Controller
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
        $data['content'] = 'Back-Office/ajout-sport';
        $this->load->view('Back-Office/template', $data);
    }

    public function ajouter()
    {
        $this->load->model('sportActivity');
        $post = $this->input->post();
        $this->sportActivity->create(array('nom' => $post['nomSport']), array('id' => 'null'));
        redirect('Back-Office/sportActivityController');
    }

    public function configurer()
    {
        $this->load->model('sportActivity');
        $this->load->model('regime');
        $this->load->model('day');
        $data['message'] = '';
        $data['sports'] = $this->sportActivity->getAll();
        $data['regimes'] = $this->regime->getAllWithDetails();
        $data['jours'] = $this->day->getAll();
        $data['content'] = 'Back-Office/config-sport';
        $this->load->view('Back-Office/template', $data);
    }

    public function creer()
    {
        $post = $this->input->post();
        $this->load->model('sportActivity');
        $this->sportActivity->creerPourRegime($post['idRegime'], $post['jour'], $post['sports'], $post['description']);
        redirect('Back-Office/sportActivityController');
    }
}
