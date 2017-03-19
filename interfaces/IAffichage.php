<?php

include_once '../core/Affichage.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Tidiany
 */
interface IAffichage {

    public static function getAllAffichage();

    public static function getAffichageById($id);

    public static function getAffichageByLibelle($libelle);

    public static function saveAffichage($affichage);

    public static function updateAffichage($affichage);

    public static function deleteAffichage($affichage);
}
