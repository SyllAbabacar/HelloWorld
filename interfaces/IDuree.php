<?php

include_once '../core/Duree.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Tidiany
 */
interface IDuree {

    public static function getAllDuree();

    public static function getDureeById($id);

    public static function getDureeByAnnonce($annonce);

    public static function getDureeByAffichage($libAffich, $activite = "");

    public static function saveDuree($duree);

    public static function updateDuree($duree);

    public static function deleteDuree($duree);

    public static function changeEtatDuree($id, $etat);
}
