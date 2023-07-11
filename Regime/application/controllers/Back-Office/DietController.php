<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DietController extends CI_Controller
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
        $this->load->model('objectif');
        $data['objectifs'] = $this->objectif->getAll();
        $data['content'] = 'Back-Office/ajout-regime';
        $this->load->view('Back-Office/template', $data);
    }

    public function ajouterPlat()
    {
        $this->load->model('regime');
        $post = $this->input->post();
        if (count($post['idPlat']) != 7) {
            redirect('Back-Office/dietController/configurer/' . $post['idMenu'] . '/1');
        }
        $this->regime->createRegime($post['idPlat'], $post['idRegime'], $post['idMenu']);
        redirect('Back-Office/dietController');
    }

    public function configurer($moment, $error = 0)
    {
        $this->load->model('menu');
        $this->load->model('plat');
        $this->load->model('regime');
        $idMenu = $this->menu->getMenu($moment);
        $data['plats'] = $this->plat->getAll('*', array('idMenu' => $idMenu));
        $data['idMenu'] = $idMenu;
        $data['message'] = '';
        if ($error == 1) {
            $data['message'] = 'Veuillez selectionner 7 plats';
        }
        $data['regimes'] = $this->regime->getAllWithDetails();
        $data['content'] = 'Back-Office/config-regime';
        $this->load->view('Back-Office/template', $data);
    }

    public function creer()
    {
        $post = $this->input->post();
        $this->load->model('regime');
        $options_echappees = array(
            'idObjectif' => $post['idObjectif'],
            'poidsDebut' => $post['variationMin'],
            'poidsFin' => $post['variationMax'],
            'duree' => $post['duree'],
            'prixParSemaine' => $post['prix']
        );
        $options_non_echappees = array('id' => 'null');
        $this->regime->create($options_echappees, $options_non_echappees);
        redirect('Back-Office/dietController');
    }
}
