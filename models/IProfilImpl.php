<?php

include_once '../models/DB.php';
include_once '../interfaces/IProfils.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IProfilImpl
 *
 * @author Tidiany
 */
class IProfilImpl implements IProfils {

    public static function deleteProfils($profils) {
        
    }

    public static function getAllProfils() {
        $listeProfil = array();
        $req = DB::connect()->query("select * from profile");
        while ($obj = $req->fetchObject()) {
            array_push($listeProfil, $obj);
        }
        return $listeProfil;
    }

    public static function getProfilsById($id) {
        $req = DB::connect()->prepare("select * from profile where id_profile = ?");
        $req->bindValue(1, $id, PDO::PARAM_INT);
        $req->execute();
        if ($obj = $req->fetchObject()) {
            return $obj;
        } else {
            return NULL;
        }
    }

    public static function saveProfils($profils) {
        
    }

    public static function updateProfils($profils) {
        
    }

}
