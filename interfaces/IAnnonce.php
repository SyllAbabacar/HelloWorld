<?php

include_once '../core/Annonce.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Tidiany
 */
interface IAnnonce {

    public static function getAllAnnonce();

    public static function getAnnonceById($id);

    public static function getAnnonceByType_annonce($type_annonce);

    public static function getAnnonceByActivite($activite);

    public static function getAnnonceByEtat_annonce($etat_annonce);

    public static function getAnnonceByLocalite($localite);

    public static function getAnnonceByProprietaire($proprietaire);

    public static function getAnnonceByAffichage($lib_Aff);

    public static function saveAnnonce($annonce);

    public static function updateAnnonce($annonce);

    public static function deleteAnnonce($annonce);

    public static function rechAnnonce($rech);

    public static function genereRefAnnonce();

    public static function validAnnonce($idAnn, $idComm);
}
