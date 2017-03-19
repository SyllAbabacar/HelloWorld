<?php

include_once '../models/DB.php';
include_once '../interfaces/IType_message.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IType_messageImpl
 *
 * @author Tidiany
 */
class IType_messageImpl implements IType_message {

    public static function deleteType_message($type_message) {
        
    }

    public static function getAllType_message() {
        $listeTypeMessage = array();
        $req = DB::connect()->query("select * from type_message");
        while ($obj = $req->fetchObject()) {
            array_push($listeTypeMessage, $obj);
        }
        return $listeTypeMessage;
    }

    public static function getType_messageById($id) {
        
    }

    public static function saveType_message($type_message) {
        
    }

    public static function updateType_message($type_message) {
        
    }

//put your code here
}
