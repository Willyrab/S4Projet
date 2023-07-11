<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SportActivity extends BDDObject
{
    protected $table = 'sport';

    public function creerPourRegime($idRegime, $jour, $sport, $description)
    {
        $this->table = 'activitesSportives';
        for ($i = 0; $i < count($jour); $i++) {
            $options_echappees = array(
                'idRegime' => $idRegime,
                'jour' => ($i + 1),
                'idSport' => $sport[$i],
                'description' => $description[$i]
            );
            $options_non_echappees = array(
                'id' => 'null'
            );
            $this->create($options_echappees, $options_non_echappees);
        }
        $this->table = 'sport';
    }
}
