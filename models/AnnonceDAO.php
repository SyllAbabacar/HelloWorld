<?php

require 'DB.php';
require '../core/Annonce.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AnnonceDAO
 *
 * @author Tidiany
 */
class AnnonceDAO {

    public static function getAllAnnonce() {
        $listeAnnonce = array();
        $req = DB::connect()->query("select * from annonce");
        while ($obj = $req->fetchObject()) {
            $listeMedia = array();
            $req1 = DB::connect()->query("select * from media where id_annonce = $obj->id_annonce");
            while ($objMedia = $req1->fetchObject()) {
                array_push($listeMedia, $objMedia);
            }
            $req2 = DB::connect()->query("select * from type_annonce where id_type_annonce = $obj->id_type_annonce");

            $obj->typeAnnonce = $req2->fetchObject();
            $obj->listMedia = $listeMedia;
            array_push($listeAnnonce, $obj);
//            array_push($listeAnnonce, json_encode(new Annonce(
//              $obj->id_annonce,
//              $obj->date_creation,
//              $obj->id_localite,
//              $obj->id_type_annonce,
//              $obj->id_proprietaire,
//              $obj->montant,
//              $obj->libelle,
//              $obj->description,
//              $obj->adresse,
//              $obj->etat_annonce,
//              $obj->id_superviseur,
//              $obj->id_courtier)
//              ));
        }
        return $listeAnnonce;
    }

    public static function getAnnonceById($id) {
        $req = DB::connect()->prepare("select * from annonce WHERE id_annonce=?");
        $req->bindValue(1, $id, PDO::PARAM_INT);
        $req->execute();
        if ($obj = $req->fetchObject()) {
            return $obj;
        } else {
            return NULL;
        }
    }

    public static function addAnnonce($annonce) {
        try {
            $sql = DB::connect()->prepare("insert into annonce value (null,?,?,?,?,?,?,?,?,?,?,?)");
            $sql->bindValue(1, $annonce->getDate_creation());
            $sql->bindValue(2, $annonce->getLocalite()->getId_Localite(), PDO::PARAM_INT);
            $sql->bindValue(3, $annonce->getType_annonce()->getType_id_annonce(), PDO::PARAM_INT);
            $sql->bindValue(4, $annonce->getProprietaire()->getId_membre(), PDO::PARAM_INT);
            $sql->bindValue(5, $annonce->getMontant(), PDO::PARAM_INT);
            $sql->bindValue(6, $annonce->getLibelle(), PDO::PARAM_STR);
            $sql->bindValue(7, $annonce->getDescription(), PDO::PARAM_STR);
            $sql->bindValue(8, $annonce->getAdresse(), PDO::PARAM_STR);
            $sql->bindValue(9, $annonce->getEtat_annonce(), PDO::PARAM_INT);
            $sql->bindValue(10, $annonce->getSuperviseur()->getId_membre(), PDO::PARAM_INT);
            $sql->bindValue(11, $annonce->getCourtier()->getId_membre(), PDO::PARAM_INT);
            if ($sql->execute())
                return true;
            else
                return false;
        } catch (Exception $e) {
            echo $e;
        }
    }

    public static function deleteAnnonce($annonce) {
        try {
            $sql = DB::connect()->prepare("delete from annonce where id_annonce = ?");
            $sql->bindValue(1, $annonce->getId_annonce(), PDO::PARAM_INT);
            if ($sql->execute())
                return true;
            else
                return false;
        } catch (Exception $e) {
            echo $e;
        }
    }

    public static function updateAnnonce($annonce) {
        try {
            $sql = DB::connect()->prepare("update annonce set date_creation = ?, id_localite = ?, id_type_annonce = ?, id_proprietaire = ?, montant = ?, libelle = ?, description = ?, adresse = ?, etat_annonce = ?, id_superviseur = ?, id_courtier = ? where id = ?");
            $sql->bindValue(1, $annonce->getDate_creation());
            $sql->bindValue(2, $annonce->getLocalite()->getId_Localite(), PDO::PARAM_INT);
            $sql->bindValue(3, $annonce->getType_annonce()->getType_id_annonce(), PDO::PARAM_INT);
            $sql->bindValue(4, $annonce->getProprietaire()->getId_membre(), PDO::PARAM_INT);
            $sql->bindValue(5, $annonce->getMontant(), PDO::PARAM_INT);
            $sql->bindValue(6, $annonce->getLibelle(), PDO::PARAM_STR);
            $sql->bindValue(7, $annonce->getDescription(), PDO::PARAM_STR);
            $sql->bindValue(8, $annonce->getAdresse(), PDO::PARAM_STR);
            $sql->bindValue(9, $annonce->getEtat_annonce(), PDO::PARAM_INT);
            $sql->bindValue(10, $annonce->getSuperviseur()->getId_membre(), PDO::PARAM_INT);
            $sql->bindValue(11, $annonce->getCourtier()->getId_membre(), PDO::PARAM_INT);
            if ($sql->execute())
                return true;
            else
                return false;
        } catch (Exception $e) {
            echo $e;
        }
    }

}
