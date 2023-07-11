<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Regime extends BDDObject
{
    protected $table = 'regime';
    public function getAllWithDetails()
    {
        return $this->db->select('regime.*, objectif.nom')
            ->from($this->table)
            ->join('objectif', 'objectif.id = regime.idObjectif')
            ->get()
            ->result();
    }

    public function createRegime($plats, $idRegime, $idMenu)
    {
        $this->load->model('detailsRegime');
        for ($i = 0; $i < count($plats); $i++) {
            $options_echappees = array(
                'idRegime' => $idRegime,
                'jour' => ($i + 1),
                'idMenu' => $idMenu,
                'idPlat' => $plats[$i]
            );
            $options_non_echappees = array(
                'id' => 'null'
            );
            $this->detailsRegime->create($options_echappees, $options_non_echappees);
        }
    }
}
