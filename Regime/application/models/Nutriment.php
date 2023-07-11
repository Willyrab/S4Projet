<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nutriment extends BDDObject
{
    protected $table = 'nutriments';

    public function getAllNutriments()
    {
        return $this->db->select('nutriments.*, unites.notation')
            ->from($this->table)
            ->join('unites', 'unites.id = nutriments.idUnite')
            ->get()
            ->result();
    }
}
