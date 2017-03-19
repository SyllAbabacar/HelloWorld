<?php

include_once '../models/DB.php';
include_once '../interfaces/IActivite.php';
include_once '../models/IType_annonceImpl.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IActiviteImpl
 *
 * @author Tidiany
 */
class IActiviteImpl implements IActivite {

    public static function deleteActivite($activite) {
        try {
            $sql = DB::connect()->prepare("delete from activite where id_activite = ?");
            $sql->bindValue(1, $activite->getId_activite(), PDO::PARAM_INT);
            if ($sql->execute())
                return true;
            else
                return false;
        } catch (Exception $e) {
            echo $e;
        }
    }

    public static function getActiviteById($id) {
        $req = DB::connect()->prepare("select * from activite where id_activite = ?");
        $req->bindValue(1, $id, PDO::PARAM_INT);
        $req->execute();
        if ($obj = $req->fetchObject()) {
            return $obj;
        } else {
            return NULL;
        }
    }

    public static function getAllActivite() {
        $listActivite = array();
        $req = DB::connect()->query("select * from activite");
        while ($obj = $req->fetchObject()) {
            $obj->typeAnnonces = IType_annonceImpl::getType_annonceByActivite($obj->id_activite);
            array_push($listActivite, $obj);
        }
//        var_dump($listActivite);
        return $listActivite;
    }

    public static function saveActivite($activite) {
        try {
            $sql = DB::connect()->prepare("insert into activite value (null,?,?)");
            $sql->bindValue(1, $activite->getLib_activite(), PDO::PARAM_STR);
            $sql->bindValue(2, $activite->getDesc_activite(), PDO::PARAM_STR);
            if ($sql->execute())
                return true;
            else
                return false;
        } catch (Exception $exc) {
            return false;
        }
    }

    public static function updateActivite($activite) {
        try {
            $sql = DB::connect()->prepare("update activite set lib_activite = ?, desc_activite = ?");
            $sql->bindValue(1, $activite->getLib_activite(), PDO::PARAM_STR);
            $sql->bindValue(2, $activite->getDesc_activite(), PDO::PARAM_STR);
            if ($sql->execute())
                return true;
            else
                return false;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
