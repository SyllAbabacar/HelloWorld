<?php

include_once '../models/DB.php';
include_once '../interfaces/IAnnonce.php';
include_once '../models/IMediaImpl.php';
include_once '../models/IType_annonceImpl.php';
include_once '../models/IDureeImpl.php';
include_once '../models/ILocaliteImpl.php';
include_once '../models/IMembreImpl.php';
include_once '../models/ICommentaireImpl.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IAnnonceImpl
 *
 * @author Tidiany
 */
class IAnnonceImpl implements IAnnonce {

    public static function deleteAnnonce($annonce) {
        try {
            $sql = DB::connect()->prepare("update annonce set etat_annonce = ? where id_annonce = ?");
            $sql->bindValue(1, 3, PDO::PARAM_INT);
            $sql->bindValue(1, $annonce, PDO::PARAM_INT);
            if ($sql->execute())
                return true;
            else
                return false;
        } catch (Exception $e) {
            echo $e;
        }
    }

    public static function getAllAnnonce() {
        $listeAnnonce = array();
        $req = DB::connect()->query("select * from annonce");
        while ($obj = $req->fetchObject()) {
            $obj->typeAnnonce = IType_annonceImpl::getType_annonceById($obj->id_type_annonce);
            $obj->listMedia = IMediaImpl::getMediaByAnnonce($obj->id_annonce);
            $obj->localite = ILocaliteImpl::getLocaliteById($obj->id_localite);
            $obj->listeDurees = IDureeImpl::getDureeByAnnonce($obj->id_annonce);
            array_push($listeAnnonce, $obj);
        }
        return $listeAnnonce;
    }

    public static function getAnnonceByEtat_annonce($etat_annonce) {
        $listeAnnonce = array();
        $req = DB::connect()->prepare("select * from annonce WHERE etat_annonce=?");
        $req->bindValue(1, $etat_annonce, PDO::PARAM_INT);
        $req->execute();
        while ($obj = $req->fetchObject()) {
            $obj->listMedia = IMediaImpl::getMediaByAnnonce($obj->id_annonce);
            $obj->localite = IMediaImpl::getMediaByAnnonce($obj->id_localite);
            array_push($listeAnnonce, $obj);
        }
        return $listeAnnonce;
    }

    public static function getAnnonceById($id) {
        $req = DB::connect()->prepare("select * from annonce WHERE id_annonce=?");
        $req->bindValue(1, $id, PDO::PARAM_INT);
        $req->execute();
        if ($obj = $req->fetchObject()) {
            $obj->typeAnnonce = IType_annonceImpl::getType_annonceById($obj->id_type_annonce);
            $obj->Proprietaire = IMembreImpl::getMembreById($obj->id_proprietaire);
            $obj->Courtier = IMembreImpl::getMembreById($obj->id_courtier);
            $obj->listMedia = IMediaImpl::getMediaByAnnonce($obj->id_annonce);
            $obj->Commentaires = ICommentaireImpl::getCommentaireByAnnonce($obj->id_annonce);
            return $obj;
        } else {
            return NULL;
        }
    }

    public static function getAnnonceByLocalite($localite) {
        $listeAnnonce = array();
        $req = DB::connect()->prepare("select * from annonce WHERE id_type_annonce=?");
        $req->bindValue(1, $type_annonce, PDO::PARAM_INT);
        $req->execute();
        while ($obj = $req->fetchObject()) {
            $obj->listMedia = IMediaImpl::getMediaByAnnonce($obj->id_annonce);
            $obj->localite = IMediaImpl::getMediaByAnnonce($obj->id_localite);
            array_push($listeAnnonce, $obj);
        }
        return $listeAnnonce;
    }

    public static function getAnnonceByProprietaire($proprietaire) {
        $listeAnnonce = array();
        $req = DB::connect()->prepare("select * from annonce WHERE id_proprietaire=?");
        $req->bindValue(1, $proprietaire, PDO::PARAM_INT);
        $req->execute();
        while ($obj = $req->fetchObject()) {
            $obj->listMedia = IMediaImpl::getMediaByAnnonce($obj->id_annonce);
            $obj->localite = IMediaImpl::getMediaByAnnonce($obj->id_localite);
            array_push($listeAnnonce, $obj);
        }
        return $listeAnnonce;
    }

    public static function getAnnonceByType_annonce($type_annonce) {
        $listeAnnonce = array();
        $req = DB::connect()->prepare("select * from annonce WHERE id_type_annonce=?");
        $req->bindValue(1, $type_annonce, PDO::PARAM_INT);
        $req->execute();
        while ($obj = $req->fetchObject()) {
            $obj->listMedia = IMediaImpl::getMediaByAnnonce($obj->id_annonce);
            $obj->localite = ILocaliteImpl::getLocaliteById($obj->id_localite);
            $obj->listeDuree = IDureeImpl::getDureeByAnnonce($obj->id_annonce);
            array_push($listeAnnonce, $obj);
        }
        return $listeAnnonce;
    }

    public static function saveAnnonce($annonce) {
//        var_dump($annonce);
        try {
            $sql = DB::connect()->prepare("insert into annonce value (null,Now(),'','',?,?,?,?,?,?,?,?,?,?,?,?)");
            $sql->bindValue(1, $annonce->getReference(), PDO::PARAM_STR);
            $sql->bindValue(2, $annonce->getLocalite(), PDO::PARAM_INT);
            $sql->bindValue(3, $annonce->getType_annonce(), PDO::PARAM_INT);
            $sql->bindValue(4, $annonce->getProprietaire(), PDO::PARAM_INT);
            $sql->bindValue(5, $annonce->getMontant(), PDO::PARAM_INT);
            $sql->bindValue(6, $annonce->getLibelle(), PDO::PARAM_STR);
            $sql->bindValue(7, $annonce->getDescription(), PDO::PARAM_STR);
            $sql->bindValue(8, $annonce->getAdresse(), PDO::PARAM_STR);
            $sql->bindValue(9, $annonce->getTransaction(), PDO::PARAM_STR);
            $sql->bindValue(10, $annonce->getEtat_annonce(), PDO::PARAM_INT);
            if ($annonce->getSuperviseur() == 0) {
                $sql->bindValue(11, NULL, PDO::PARAM_NULL);
            } else {
                $sql->bindValue(11, $annonce->getSuperviseur(), PDO::PARAM_INT);
            }
            if ($annonce->getCourtier() == 0) {
                $sql->bindValue(12, NULL, PDO::PARAM_NULL);
            } else {
                $sql->bindValue(12, $annonce->getCourtier(), PDO::PARAM_INT);
            }

            if ($sql->execute())
                return DB::connect()->lastInsertId();
            else
                return false;
        } catch (Exception $e) {
            echo $e;
        }
    }

    public static function updateAnnonce($annonce) {
//        var_dump($annonce);
        try {
            $sql = DB::connect()->prepare("update annonce set id_localite = ?, id_type_annonce = ?, id_proprietaire = ?, montant = ?, libelle = ?, description = ?, adresse = ?, etat_annonce = ? where id_annonce = ?");
            $sql->bindValue(1, $annonce->getLocalite(), PDO::PARAM_INT);
            $sql->bindValue(2, $annonce->getType_annonce(), PDO::PARAM_INT);
            $sql->bindValue(3, $annonce->getProprietaire(), PDO::PARAM_INT);
            $sql->bindValue(4, $annonce->getMontant(), PDO::PARAM_INT);
            $sql->bindValue(5, $annonce->getLibelle(), PDO::PARAM_STR);
            $sql->bindValue(6, $annonce->getDescription(), PDO::PARAM_STR);
            $sql->bindValue(7, $annonce->getAdresse(), PDO::PARAM_STR);
            $sql->bindValue(8, $annonce->getEtat_annonce(), PDO::PARAM_INT);
            $sql->bindValue(9, $annonce->getId_annonce(), PDO::PARAM_INT);
            if ($sql->execute())
                return true;
            else
                return false;
        } catch (Exception $e) {
            echo $e;
        }
    }

    public static function getAnnonceByActivite($activite) {
        $listeAnnonce = array();
        $listeTypeAnn = IType_annonceImpl::getType_annonceByActivite($activite);
        foreach ($listeTypeAnn as $type) {
            foreach (self::getAnnonceByType_annonce($type->id_type_annonce) as $ann) {
                array_push($listeAnnonce, $ann);
            }
        }
        return $listeAnnonce;
    }

    public static function rechAnnonce($rech) {
        $listeAnnonce = array();
        $req = DB::connect()->prepare("select * from annonce WHERE date_creation LIKE ? OR montant LIKE ? OR libelle LIKE ? OR description LIKE ? OR adresse LIKE ? OR reference LIKE ?");
        $cle = "%" . $rech . "%";
        $req->bindValue(1, $cle, PDO::PARAM_STR);
        $req->bindValue(2, $cle, PDO::PARAM_STR);
        $req->bindValue(3, $cle, PDO::PARAM_STR);
        $req->bindValue(4, $cle, PDO::PARAM_STR);
        $req->bindValue(5, $cle, PDO::PARAM_STR);
        $req->bindValue(6, $cle, PDO::PARAM_STR);
        $req->execute();
        while ($obj = $req->fetchObject()) {
            $obj->listMedia = IMediaImpl::getMediaByAnnonce($obj->id_annonce);
            $obj->localite = ILocaliteImpl::getLocaliteById($obj->id_localite);
            array_push($listeAnnonce, $obj);
        }
        return $listeAnnonce;
    }

    public static function getAnnonceByAffichage($lib_Aff) {
        $listeAnnonce = array();
//        $aff = IAffichageImpl::getAffichageByLibelle($lib_Aff);
//        SELECT * FROM `duree` WHERE id_affichage_duree = 3
    }

    public static function genereRefAnnonce() {
        $req = DB::connect()->query("select max(id_annonce) id from annonce");
//        var_dump($req->fetchObject());
        if ($obj = $req->fetchObject()) {
            $id = $obj->id;
            $ref = 'RE' . substr('000000', strlen(($id + 1) . ''), strlen('000000')) . ($id + 1) . '1F';
            return $ref;
        } else {
            return NULL;
        }
    }

    public static function validAnnonce($idAnn, $idComm) {
        try {
            $sql = DB::connect()->prepare("update annonce set id_courtier = ?, etat_annonce = ?, date_validation = Now(), date_expiration = DATE_ADD(Now(), INTERVAL 15 DAY) where id_annonce = ?");
            $sql->bindValue(1, $idComm, PDO::PARAM_INT);
            $sql->bindValue(2, 1, PDO::PARAM_INT);
            $sql->bindValue(3, $idAnn, PDO::PARAM_INT);
            if ($sql->execute())
                return true;
            else
                return false;
        } catch (Exception $e) {
            echo $e;
        }
    }

}
