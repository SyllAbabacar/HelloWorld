<?php

include_once '../core/Type_Annonce.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Tidiany
 */
interface IType_annonce {

    public static function getAllType_annonce();

    public static function getType_annonceById($id);

    public static function getType_annonceByActivite($activite);

    public static function saveType_annonce($type_annonce);

    public static function updateType_annonce($type_annonce);

    public static function deleteType_annonce($type_annonce);
}
