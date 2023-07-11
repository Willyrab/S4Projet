<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PorteMonnaie extends BDDObject
{
    protected $table = 'porteMonnaie';

    public function getSolde($idUtilisateur)
    {
        $where = 'idUtilisateur = ' . $idUtilisateur;
        $last = $this->db->select('*')
            ->from($this->table)
            ->where($where)
            ->order_by('date', 'DESC')
            ->get()
            ->row(0);
        if (empty($last)) {
            return 0;
        }
        return $last->montantFin;
    }

    public function addMoney($idUtilisateur, $variation)
    {
        $solde = $this->getSolde($idUtilisateur);
        $options_echappees = array(
            'idUtilisateur' => $idUtilisateur,
            'montantInitial' => $solde,
            'variation' => $variation,
            'montantFin' => $solde + $variation
        );
        $options_non_echappees = array(
            'id' => 'null',
            'date' => 'now()'
        );
        $this->create($options_echappees, $options_non_echappees);
    }
}
