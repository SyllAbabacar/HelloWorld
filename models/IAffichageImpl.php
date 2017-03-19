<?php

include_once '../models/DB.php';
include_once '../interfaces/IAffichage.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IAffichageImpl
 *
 * @author Tidiany 
 * 776983821
 */
class IAffichageImpl implements IAffichage {

    public static function deleteAffichage($affichage) {
        try {
            $sql = DB::connect()->prepare("delete from affichage where id_annonce = ?");
            $sql->bindValue(1, $affichage->getId_affichage(), PDO::PARAM_INT);
            if ($sql->execute())
                return true;
            else
                return false;
        } catch (Exception $e) {
            echo $e;
        }
    }

    public static function getAffichageById($id) {
        $req = DB::connect()->prepare("select * from affichage WHERE id_affichage=?");
        $req->bindValue(1, $id, PDO::PARAM_INT);
        $req->execute();
        if ($obj = $req->fetchObject()) {
            return $obj;
        } else {
            return NULL;
        }
    }

    public static function getAllAffichage() {
        $listeAffichage = array();
        $req = DB::connect()->query("select * from affichage");
        while ($obj = $req->fetchObject()) {
            array_push($listeAffichage, $obj);
        }
        return $listeAffichage;
    }

    public static function saveAffichage($affichage) {
        try {
            $sql = DB::connect()->prepare("insert into affichage value (null,?,?)");
            $sql->bindValue(1, $affichage->getLib_affichage(), PDO::PARAM_STR);
            $sql->bindValue(2, $affichage->getEtat_affichage(), PDO::PARAM_INT);
            if ($sql->execute())
                return true;
            else
                return false;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public static function updateAffichage($affichage) {
        try {
            $sql = DB::connect()->prepare("update affichage set lib_affichage = ?, etat_affichage = ?");
            $sql->bindValue(1, $affichage->getLib_affichage(), PDO::PARAM_STR);
            $sql->bindValue(2, $affichage->getEtat_affichage(), PDO::PARAM_STR);
            if ($sql->execute())
                return true;
            else
                return false;
        } catch (Exception $e) {
            echo $e;
        }
    }

    public static function getAffichageByLibelle($libelle) {
        $req = DB::connect()->prepare("select * from affichage WHERE lib_affichage = ?");
        $req->bindValue(1, $libelle, PDO::PARAM_STR);
        $req->execute();
        if ($obj = $req->fetchObject()) {
            return $obj;
        } else {
            return NULL;
        }
    }

}
