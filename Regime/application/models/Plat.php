<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Plat extends BDDObject
{
    protected $table = 'plat';

    public function getLastId()
    {
        return $this->db->select_max('id')
            ->from('plat')
            ->get()
            ->result()[0]->id;
    }
}
