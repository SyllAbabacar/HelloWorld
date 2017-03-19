<?php

include_once '../core/Pays.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Tidiany
 */
interface IPays {

    public static function getAllPays();

    public static function getPaysById($id);

    public static function savePays($pays);

    public static function updatePays($pays);

    public static function deletePays($pays);
}
