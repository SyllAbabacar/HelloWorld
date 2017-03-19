<?php

include_once '../core/Activite.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Tidiany
 */
interface IActivite {

    public static function getAllActivite();

    public static function getActiviteById($id);

    public static function saveActivite($activite);

    public static function updateActivite($activite);

    public static function deleteActivite($activite);
}
