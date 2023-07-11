<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Objet extends CI_Model
{

    //get Utilisateur
    public function findUser($email)
    {
        try {
            $sql = "SELECT * FROM utilisateur WHERE email=?";
            $query = $this->db->query($sql, array($email));
            $dbAll = array();

            foreach ($query->result_array() as $row) {
                array_push($dbAll, $row);
            }

            return $dbAll;
        } catch (Exception $e) {
            // echo $e;
        }
    }

    //verification de mdp d un utilisateur
    public function check_password($email, $password)
    {
        $allUser =  $this->findUser($email);

        foreach ($allUser as $user) {
            if ($password === $user['motDePasse']) {
                return $user;
            }
        }
    }


    //inscription de l utilisateur 
    public function getAllGenre()
    {
        try {
            $sql = "SELECT * FROM genre ";
            $query = $this->db->query($sql);
            $dbAll = array();

            foreach ($query->result_array() as $row) {
                array_push($dbAll, $row);
            }

            return $dbAll;
        } catch (Exception $e) {
            // echo $e;
        }
    }
    public function addUser($nom, $prenom, $datedenaissance, $adresse, $ville, $telephone, $email, $motdepasse, $genre)
    {
        try {
            $sql = "INSERT INTO utilisateur (nom,prenom,dateDeNaissance,adresse,ville,telephone,email,motDePasse,idgenre) 
                    VALUES ('%s','%s','%s','%s','%s','%s','%s','%s','%s')";
            $sql = sprintf($sql, $nom, $prenom, $datedenaissance, $adresse, $ville, $telephone, $email, $motdepasse, $genre);
            $this->db->query($sql);
        } catch (Exception $e) {
            //echo $e;
        }
    }

    //get id utilisateur  
    public function getIdUser()
    {
        try {
            $sql = "SELECT max(id) FROM utilisateur WHERE email=?";
            $query = $this->db->query($sql);
            $dbAll = array();
            foreach ($query->result_array() as $row) {
                array_push($dbAll, $row);
            }
        } catch (Exception $e) {
            // echo $e;
        }
        return $dbAll;
    }


    //infofrmation de l utilisateur
    public function getUtilisateur($idutilisateur)
    {
        try {
            $sql = "SELECT * FROM utilisateur WHERE id=?";
            $query = $this->db->query($sql, array($$idutilisateur));
            $dbAll = array();

            foreach ($query->result_array() as $row) {
                array_push($dbAll, $row);
            }

            return $dbAll;
        } catch (Exception $e) {
            // echo $e;
        }
    }

    //ajout de profil de l utilsateur
    public function addtaille($idutilisateur, $date, $tailletilsateur)
    {
        try {
            $sql = "INSERT INTO tailleUtilisateur (idUtilisateur,date,taille) 
                    VALUES ('%s','%s','%s')";
            $sql = sprintf($sql, $idutilisateur, $date, $tailletilsateur);
            $this->db->query($sql);
        } catch (Exception $e) {
            //echo $e;
        }
    }

    public function addpoids($idutilisateur, $date, $poids)
    {
        try {
            $sql = "INSERT INTO poidsUtilisateur (idUtilisateur,date,poids) 
                    VALUES ('%s','%s','%s')";
            $sql = sprintf($sql, $idutilisateur, $date, $poids);
            $this->db->query($sql);
        } catch (Exception $e) {
            //echo $e;
        }
    }

    //information de l utilisateur
    public function getCompletion($idutilisateur)
    {
        try {
            $sql = "SELECT u.nom, u.prenom, g.nom, t.taille, p.date, p.poids
              FROM utilisateur u
              LEFT JOIN tailleUtilisateur t ON u.id = t.idUtilisateur
              LEFT JOIN poidsUtilisateur p ON u.id = p.idUtilisateur
              LEFT JOIN genre g ON u.idgenre = g.id

              WHERE u.id =?;";

            $query = $this->db->query($sql, array($idutilisateur));
            $dbAll = array();

            foreach ($query->result_array() as $row) {
                array_push($dbAll, $row);
            }

            return $dbAll;
        } catch (Exception $e) {
            // echo $e;
        }
    }

    //verification de code
    public function verifierCode($code)
    {
        $this->db->where('code', $code);
        $query = $this->db->get('codePorteMonnaie');

        if ($query->num_rows() > 0) {
            // Le code existe, retourner les données du code
            return $query->row();
        } else {
            // Le code n'existe pas
            return false;
        }
    }

    //insertion de recharge de l utilisateur
    public function addrecharge($date, $code, $idutilisateur)
    {
        try {
            $sql = "INSERT INTO demandeRecharge(date,idcode,idUtilisateur) 
                    VALUES('%s','%s','%s')";
            $sql = sprintf($sql, $date, $code, $idutilisateur);
            $this->db->query($sql);
        } catch (Exception $e) {
            //echo $e;
        }
    }

    //get soldes final de l utilisateur
    public function getSolde($idUtilisateur)
    {
        $sql = "SELECT * FROM porteMonnaie  WHERE idUtilisateur='%d' ORDER BY date DESC LIMIT 1";
        $sql = sprintf($sql, $idUtilisateur);
        $query = $this->db->query($sql);
        $dbAll = $query->row_array();

        return $dbAll;
    }
}
