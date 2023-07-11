<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PlatController extends CI_Controller
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
        $this->load->model('menu');
        $this->load->model('nutriment');
        $data['nutriments'] = $this->nutriment->getAllNutriments();
        $data['menu'] = $this->menu->getAll();
        $data['content'] = 'Back-Office/ajout-plat';
        $this->load->view('Back-Office/template', $data);
    }

    public function ajouter()
    {
        $this->load->model('plat');
        $this->load->model('photoPlat');
        $this->load->model('composition');
        $post = $this->input->post();
        $this->plat->create(array('nom' => $post['nom'], 'ingredients' => $post['ingredients'], 'idMenu' => $post['idMenu']), array('id' => 'null'));
        $idPlat = $this->plat->getLastId();
        $path = $this->do_upload();
        $this->photoPlat->create(array('idPlat' => $idPlat, 'chemin' => $path), array('id' => 'null'));
        $this->composition->insertComposition($idPlat, $post['nutriments'], $post['quantite']);
        redirect('Back-Office/platController');
    }

    public function do_upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 10000000;
        $config['max_width'] = 1920;
        $config['max_height'] = 1080;

        $this->load->library('upload', $config);
        $fieldName = 'photo';
        $ifError = false;
        $data = array();
        if ($_FILES && isset($_FILES[$fieldName])) {
            $_FILES['file_temp']['name'] = $_FILES[$fieldName]['name'];
            $_FILES['file_temp']['type'] = $_FILES[$fieldName]['type'];
            $_FILES['file_temp']['tmp_name'] = $_FILES[$fieldName]['tmp_name'];
            $_FILES['file_temp']['error'] = $_FILES[$fieldName]['error'];
            $_FILES['file_temp']['size'] = $_FILES[$fieldName]['size'];
            if (!$this->upload->do_upload('file_temp')) {
                $ifError = true;
                $data['error'] = $this->upload->display_errors();
                print_r($data['error']);
            } else {
                $fichier = $this->upload->data();
                return $fichier['full_path'];
            }
        }
        if ($ifError == true) {
            //$data['content'] = 'Back-Office/ajout-plat';
            //$this->load->view('Back-Office/template', $data);
        }
    }
}
