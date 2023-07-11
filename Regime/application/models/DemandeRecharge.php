<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DemandeRecharge extends CodeRecharge
{
    public $idDemande;
    public $date;
    public $idUtilisateur;
    public $utilisateur;
    protected $table = 'demandeRecharge';

    public function getAllDemandes()
    {
        $where = array('codePorteMonnaie.etat' => 1);
        $demandes = $this->db->select('demandeRecharge.*, codePorteMonnaie.code, codePorteMonnaie.valeur, codePorteMonnaie.etat, utilisateur.email')
            ->from($this->table)
            ->join('codePorteMonnaie', 'codePorteMonnaie.id = demandeRecharge.idCode')
            ->join('utilisateur', 'utilisateur.id = demandeRecharge.idUtilisateur')
            ->where($where)
            ->get()
            ->result();
        $ob = array();
        foreach ($demandes as $d) {
            $o = new DemandeRecharge();
            $o->id = $d->idCode;
            $o->idDemande = $d->id;
            $o->code = $d->code;
            $o->valeur = $d->valeur;
            $o->etat = $d->etat;
            $o->date = $d->date;
            $o->utilisateur = $d->email;
            $o->idUtilisateur = $d->idUtilisateur;
            $ob[] = $o;
        }
        return $ob;
    }
}
