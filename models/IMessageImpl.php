<?php

include_once '../models/DB.php';
include_once '../interfaces/IMessage.php';
include_once '../models/IAnnonceImpl.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IMessageImpl
 *
 * @author Tidiany
 */
class IMessageImpl implements IMessage {

    public static function deleteMessage($message) {
        
    }

    public static function getAllMessage() {
        $listeMess = array();
        $req = DB::connect()->query("select * from message");
        while ($obj = $req->fetchObject()) {
            array_push($listeMess, $obj);
        }
        return $listeMess;
    }

    public static function getMessageByEtat($etat) {
        
    }

    public static function getMessageById($id) {
        $req = DB::connect()->prepare("select * from message WHERE id_message=?");
        $req->bindValue(1, $id, PDO::PARAM_INT);
        $req->execute();
        if ($obj = $req->fetchObject()) {
            $obj->annonce = IAnnonceImpl::getAnnonceById($obj->id_annonce);
            return $obj;
        } else {
            return NULL;
        }
    }

    public static function saveMessage($message) {
        var_dump($message);
        try {
            $sql = DB::connect()->prepare("insert into message value (null,?,?,Now(),?,?,?,?,?,?)");
            $sql->bindValue(1, $message->getObjet_message(), PDO::PARAM_STR);
            $sql->bindValue(2, $message->getContenu_message(), PDO::PARAM_STR);
            $sql->bindValue(3, $message->getEtat(), PDO::PARAM_STR);
            $sql->bindValue(4, $message->getNom(), PDO::PARAM_STR);
            $sql->bindValue(5, $message->getEmail(), PDO::PARAM_STR);
//            $sql->bindValue(6, $message->getDestinataire(), PDO::PARAM_INT);
            if ($message->getDestinataire() == 0) {
                $sql->bindValue(6, NULL, PDO::PARAM_NULL);
            } else {
                $sql->bindValue(6, $message->getDestinataire(), PDO::PARAM_INT);
            }
//            $sql->bindValue(7, $message->getAnnonce(), PDO::PARAM_INT);
            if ($message->getAnnonce() == 0) {
                $sql->bindValue(7, NULL, PDO::PARAM_NULL);
            } else {
                $sql->bindValue(7, $message->getAnnonce(), PDO::PARAM_INT);
            }
            $sql->bindValue(8, $message->getType_message(), PDO::PARAM_INT);
            if ($sql->execute())
                return TRUE;
            else
                return FALSE;
        } catch (Exception $e) {
            echo $e;
        }
    }

    public static function updateMessage($message) {
//        var_dump($message);
        try {
            $sql = DB::connect()->prepare("update message set etat = ? where id_message = ?");
            $sql->bindValue(1, 1, PDO::PARAM_STR);
            $sql->bindValue(2, $message, PDO::PARAM_STR);
            if ($sql->execute())
                return true;
            else
                return false;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public static function getMessageByAnnonce($annonce) {
        $listMess = array();
        $req = DB::connect()->prepare("select * from message where id_annonce = ?");
        $req->bindValue(1, $annonce, PDO::PARAM_INT);
        $req->execute();
        while ($obj = $req->fetchObject()) {
            $obj->annonce = IAnnonceImpl::getAnnonceById($obj->id_annonce);
            array_push($listMess, $obj);
        }
        return $listMess;
    }

    public static function getMessageByProprietaire($proprietaire) {
        $listMess = array();
        $req = DB::connect()->prepare("select * from message where id_destinataire = ?");
        $req->bindValue(1, $proprietaire, PDO::PARAM_INT);
        $req->execute();
        while ($obj = $req->fetchObject()) {
            $obj->annonce = IAnnonceImpl::getAnnonceById($obj->id_annonce);
            array_push($listMess, $obj);
        }
        return $listMess;
    }

}
