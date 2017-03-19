<?php

include_once '../models/DB.php';
include_once '../interfaces/IRegion.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IRegionImpl
 *
 * @author Tidiany
 */
class IRegionImpl implements IRegion {

    public static function deleteRegion($region) {
        
    }

    public static function getAllRegion() {
        $listeRegion = array();
        $req = DB::connect()->query("select * from region");
        while ($obj = $req->fetchObject()) {
            array_push($listeRegion, $obj);
        }
        return $listeRegion;
    }

    public static function getRegionById($id) {
        $req = DB::connect()->prepare("select * from region WHERE id_region=?");
        $req->bindValue(1, $id, PDO::PARAM_INT);
        $req->execute();
        if ($obj = $req->fetchObject()) {
            return $obj;
        } else {
            return NULL;
        }
    }

    public static function getRegionByPays($pays) {
        
    }

    public static function saveRegion($region) {
        
    }

    public static function updateRegion($region) {
        
    }

}
