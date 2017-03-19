<?php

include_once '../models/DB.php';
include_once '../interfaces/IDuree.php';
include_once '../models/IAffichageImpl.php';
include_once '../models/IAnnonceImpl.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IDureeImpl
 *
 * @author Tidiany
 */
class IDureeImpl implements IDuree {

    public static function deleteDuree($duree) {
        
    }

    public static function getAllDuree() {
        $listeDuree = array();
        $req = DB::connect()->query("select * from duree");
        while ($obj = $req->fetchObject()) {
            $obj->affichage = IAffichageImpl::getAffichageById($obj->id_affichage_duree);
            $obj->annonce = IAnnonceImpl::getAnnonceById($obj->id_annonce_duree);
            array_push($listeDuree, $obj);
        }
        return $listeDuree;
    }

    public static function getDureeByAnnonce($annonce) {
        $listeDuree = array();
        $req = DB::connect()->prepare("select * from duree where id_annonce_duree=?");
        $req->bindValue(1, $annonce, PDO::PARAM_INT);
        $req->execute();
        while ($obj = $req->fetchObject()) {
            $obj->affichage = IAffichageImpl::getAffichageById($obj->id_affichage_duree);
            array_push($listeDuree, $obj);
        }
        return $listeDuree;
    }

    public static function getDureeById($id) {
        $req = DB::connect()->prepare("select * from duree where id_duree=?");
        $req->bindValue(1, $id, PDO::PARAM_INT);
        $req->execute();
        if ($obj = $req->fetchObject()) {
            $obj->affichage = IAffichageImpl::getAffichageById($obj->id_affichage_duree);
            $obj->annonce = IAnnonceImpl::getAnnonceById($obj->id_annonce_duree);
            return $obj;
        }
    }

    public static function saveDuree($duree) {
        try {
            $sql = DB::connect()->prepare("insert into duree value (null,?,?,Now(),?,?,?)");
            $sql->bindValue(1, $duree->getAnnonce(), PDO::PARAM_INT);
            $sql->bindValue(2, $duree->getAffichage(), PDO::PARAM_INT);
            $sql->bindValue(3, $duree->getDate_debut_duree());
            $sql->bindValue(4, $duree->getDate_fin_duree());
            $sql->bindValue(5, 0, PDO::PARAM_INT);
            if ($sql->execute())
                return true;
            else
                return false;
        } catch (Exception $e) {
            echo $e;
        }
    }

    public static function updateDuree($duree) {
        
    }

    public static function getDureeByAffichage($libAffich, $activite = "") {
        $listeDuree = array();
        $aff = IAffichageImpl::getAffichageByLibelle($libAffich);
//        var_dump($aff);
//        SELECT * FROM `duree` WHERE id_affichage_duree = 3 AND date_debut_duree < Now() AND date_fin_duree > Now()
        $req = DB::connect()->prepare("select * from duree where id_affichage_duree = ? AND date_debut_duree <= Now() AND date_fin_duree >= Now()");
        $req->bindValue(1, $aff->id_affichage, PDO::PARAM_INT);
        $req->execute();
        while ($obj = $req->fetchObject()) {
            $obj->affichage = IAffichageImpl::getAffichageById($obj->id_affichage_duree);
            $obj->annonce = IAnnonceImpl::getAnnonceById($obj->id_annonce_duree);
            if ($activite != "") {
                if ($activite == $obj->annonce->typeAnnonce->id_activite) {
                    array_push($listeDuree, $obj);
                }
            } else {
                array_push($listeDuree, $obj);
            }
        }
        return $listeDuree;
    }

    public static function changeEtatDuree($id, $etat) {
        try {
            $sql = DB::connect()->prepare("update duree set etat = ? where id_duree = ?");
            $sql->bindValue(1, $etat, PDO::PARAM_INT);
            $sql->bindValue(2, $id, PDO::PARAM_INT);
            if ($sql->execute())
                return true;
            else
                return false;
        } catch (Exception $e) {
            echo $e;
        }
    }

}
