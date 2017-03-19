<?php

include_once '../core/Localite.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Tidiany
 */
interface ILocalite {

    public static function getAllLocalite();

    public static function getLocaliteById($id);

    public static function getLocaliteByRegion($region);

    public static function saveLocalite($localite);

    public static function updateLocalite($duree);

    public static function deleteLocalite($duree);
}
