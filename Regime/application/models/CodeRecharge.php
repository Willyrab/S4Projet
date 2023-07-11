<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CodeRecharge extends BDDObject
{
    public $id;
    public $code;
    public $valeur;
    public $etat;
    protected $table = 'codePorteMonnaie';

    public function getAllObjects()
    {
        $base = $this->getAll();
        $ob = array();
        foreach ($base as $b) {
            $o = new CodeRecharge();
            $o->id = $b->id;
            $o->code = $b->code;
            $o->valeur = $b->valeur;
            $o->etat = $b->etat;
            $ob[] = $o;
        }
        return $ob;
    }

    public function afficherValeur()
    {
        return number_format($this->valeur, 2, '.', ' ');
    }

    public function afficherEtat()
    {
        if ($this->etat == 1) {
            return '<span class="badge light badge-success">Disponible</span>';
        } else {
            return '<span class="badge light badge-danger">Indisponible</span>';
        }
    }
}
