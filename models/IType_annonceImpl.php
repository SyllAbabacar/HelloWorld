<?php

include_once '../models/DB.php';
include_once '../interfaces/IType_annonce.php';
include_once '../models/IActiviteImpl.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IType_annonceImpl
 *
 * @author Tidiany
 */
class IType_annonceImpl implements IType_annonce {

    public static function deleteType_annonce($type_annonce) {
        
    }

    public static function getAllType_annonce() {
        $listeTypeAnnonce = array();
        $req = DB::connect()->query("select * from type_annonce");
        while ($obj = $req->fetchObject()) {
            array_push($listeTypeAnnonce, $obj);
        }
        return $listeTypeAnnonce;
    }

    public static function getType_annonceByActivite($activite) {
        $listeType_annonce = array();
        $req = DB::connect()->prepare("select * from type_annonce where id_activite=?");
        $req->bindValue(1, $activite, PDO::PARAM_INT);
        $req->execute();
        while ($obj = $req->fetchObject()) {
            $obj->activite = IActiviteImpl::getActiviteById($obj->id_activite);
            array_push($listeType_annonce, $obj);
        }
        return $listeType_annonce;
    }

    public static function getType_annonceById($id) {
        $req = DB::connect()->prepare("select * from type_annonce where id_type_annonce=?");
        $req->bindValue(1, $id, PDO::PARAM_INT);
        $req->execute();
        if ($obj = $req->fetchObject()) {
            $obj->activite = IActiviteImpl::getActiviteById($obj->id_activite);
            return $obj;
        } else {
            return NULL;
        }
    }

    public static function saveType_annonce($type_annonce) {
        
    }

    public static function updateType_annonce($type_annonce) {
        
    }

}
