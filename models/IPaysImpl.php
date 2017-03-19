<?php

include_once '../models/DB.php';
include_once '../interfaces/IPays.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IPaysImpl
 *
 * @author Tidiany
 */
class IPaysImpl implements IPays {

    public static function deletePays($pays) {
        
    }

    public static function getAllPays() {
        $listePays = array();
        $req = DB::connect()->query("select * from pays");
        while ($obj = $req->fetchObject()) {
            array_push($listePays, $obj);
        }
        return $listePays;
    }

    public static function getPaysById($id) {
        
    }

    public static function savePays($pays) {
        
    }

    public static function updatePays($pays) {
        
    }

}
