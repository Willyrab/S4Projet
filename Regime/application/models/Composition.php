<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Composition extends BDDObject
{
    protected $table = 'valeursNutritionelles';

    public function insertComposition($idPlat, $nutriments, $quantite)
    {
        for ($i = 0; $i < count($nutriments); $i++) {
            if ($quantite[$i] == 0) {
            } else {
                $this->create(array('idPlat' => $idPlat, 'idNutriment' => $nutriments[$i], 'valeur' => $quantite[$i]), array('id' => 'null'));
            }
        }
    }
}
