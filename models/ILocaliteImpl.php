<?php

include_once '../models/DB.php';
include_once '../interfaces/ILocalite.php';
include_once '../models/IRegionImpl.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ILocaliteImpl
 *
 * @author Tidiany
 */
class ILocaliteImpl implements ILocalite {

    public static function deleteLocalite($duree) {
        
    }

    public static function getAllLocalite() {
        $listeLocalite = array();
        $req = DB::connect()->query("select * from localite");
        while ($obj = $req->fetchObject()) {
            $obj->region = IRegionImpl::getRegionById($obj->id_region);
            array_push($listeLocalite, $obj);
        }
        return $listeLocalite;
    }

    public static function getLocaliteById($id) {
        $req = DB::connect()->prepare("select * from localite WHERE id_localite=?");
        $req->bindValue(1, $id, PDO::PARAM_INT);
        $req->execute();
        if ($obj = $req->fetchObject()) {
            $obj->region = IRegionImpl::getRegionById($obj->id_region);
            return $obj;
        } else {
            return NULL;
        }
    }

    public static function getLocaliteByRegion($region) {
        
    }

    public static function saveLocalite($localite) {
        
    }

    public static function updateLocalite($duree) {
        
    }

}
