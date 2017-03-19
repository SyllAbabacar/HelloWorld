<?php

include_once '../core/Publication.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Tidiany
 */
interface IPublication {

    public static function getAllPublication();

    public static function getPublicationById($id);

    public static function savePublication($publication);

    public static function updatePublication($publication);

    public static function deletePublication($publication);
}
