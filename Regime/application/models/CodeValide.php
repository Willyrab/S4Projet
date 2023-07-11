<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CodeValide extends CodeRecharge
{
    protected $table = 'codeValide';

    public function valider($idCode)
    {
        $options_echappees = array(
            'idCode' => $idCode
        );
        $options_non_echappees = array(
            'id' => 'null',
            'dateValidation' => 'now()'
        );
        $this->create($options_echappees, $options_non_echappees);
    }
}
