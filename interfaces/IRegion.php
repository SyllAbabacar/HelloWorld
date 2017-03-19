<?php

include_once '../core/Region.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Tidiany
 */
interface IRegion {

    public static function getAllRegion();

    public static function getRegionById($id);

    public static function getRegionByPays($pays);

    public static function saveRegion($region);

    public static function updateRegion($region);

    public static function deleteRegion($region);
}
