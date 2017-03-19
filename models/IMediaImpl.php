<?php

include_once '../models/DB.php';
include_once '../interfaces/IMedia.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IMediaImpl
 *
 * @author Tidiany
 */
class IMediaImpl implements IMedia {

    public static function deleteMedia($media) {
        
    }

    public static function getAllMedia() {
        
    }

    public static function getMediaByAnnonce($annonce) {
        $listeMedia = array();
        $req = DB::connect()->prepare("select * from media where id_annonce = ?");
        $req->bindValue(1, $annonce, PDO::PARAM_INT);
        $req->execute();
        while ($objMedia = $req->fetchObject()) {
            array_push($listeMedia, $objMedia);
        }
        return $listeMedia;
    }

    public static function getMediaById($id) {
        $req = DB::connect()->prepare("select * from media WHERE id_media=?");
        $req->bindValue(1, $id, PDO::PARAM_INT);
        $req->execute();
        if ($obj = $req->fetchObject()) {
            return $obj;
        } else {
            return NULL;
        }
    }

    public static function saveMedia($media) {
        try {
            $listMedia = self::getMediaByAnnonce($media->getId_annonce());
//            echo count($listMedia);
            if (count($listMedia) < 4) {
                $sql = DB::connect()->prepare("insert into media value (null,?,?,?)");
                $sql->bindValue(1, $media->getId_annonce(), PDO::PARAM_STR);
                $sql->bindValue(2, $media->getFichier(), PDO::PARAM_STR);
                $sql->bindValue(3, $media->getDescription(), PDO::PARAM_STR);
                if ($sql->execute())
                    return TRUE;
                else
                    return FALSE;
            }else {
                return -1;
            }
        } catch (Exception $e) {
            echo $e;
        }
    }

    public static function updateMedia($media) {
        var_dump($media);
        try {
            $sql = DB::connect()->prepare("update media set fichier = ?, description = ? where id_media = ?");
            $sql->bindValue(1, $media->getFichier(), PDO::PARAM_STR);
            $sql->bindValue(2, $media->getDescription(), PDO::PARAM_STR);
            $sql->bindValue(3, $media->getId_media(), PDO::PARAM_INT);
            if ($id = $sql->execute())
                return TRUE;
            else
                return false;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
