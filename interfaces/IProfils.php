<?php

include_once '../core/Profile.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Tidiany
 */
interface IProfils {

    public static function getAllProfils();

    public static function getProfilsById($id);

    public static function saveProfils($profils);

    public static function updateProfils($profils);

    public static function deleteProfils($profils);
}
