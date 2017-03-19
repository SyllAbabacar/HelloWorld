<?php

include_once '../models/DB.php';
include_once '../interfaces/ICommentaire.php';
include_once '../models/IMembreImpl.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ICommentaireImpl
 *
 * @author Tidiany
 */
class ICommentaireImpl implements ICommentaire {

    public static function deleteCommentaire($commentaire) {
        
    }

    public static function getAllCommentaire() {
        
    }

    public static function getCommentaireByAnnonce($annonce) {
        $listeCommentaire = array();
        $req = DB::connect()->prepare("select * from commentaire where id_annonce = ?");
        $req->bindValue(1, $annonce, PDO::PARAM_INT);
        $req->execute();
        while ($obj = $req->fetchObject()) {
            $obj->User = IMembreImpl::getMembreById($obj->id_membre);
            array_push($listeCommentaire, $obj);
        }
        return $listeCommentaire;
    }

    public static function getCommentaireById($id) {
        
    }

    public static function saveCommentaire($commentaire) {
        try {
            $sql = DB::connect()->prepare("insert into commentaire value (null,?,?,?,Now())");
            $sql->bindValue(1, $commentaire->getMembre(), PDO::PARAM_STR);
            $sql->bindValue(2, $commentaire->getAnnonce(), PDO::PARAM_STR);
            $sql->bindValue(3, $commentaire->getContenu(), PDO::PARAM_STR);
            if ($sql->execute())
                return TRUE;
            else
                return FALSE;
        } catch (Exception $e) {
            echo $e;
        }
    }

    public static function updateCommentaire($commentaire) {
        
    }

}
