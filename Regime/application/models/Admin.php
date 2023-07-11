<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends BDDObject
{
    protected $table = 'admin';

    public function authentificate($post)
    {
        $compte = $this->getAll('*', array('nom' => $post['nom'], 'motDePasse' => $post['motDePasse']));
        if (count($compte) == 0) {
            return null;
        }
        return $compte[0];
    }
}
