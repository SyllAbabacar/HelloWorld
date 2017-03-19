<?php

include_once '../core/Media.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Tidiany
 */
interface IMedia {

    public static function getAllMedia();

    public static function getMediaById($id);

    public static function getMediaByAnnonce($annonce);

    public static function saveMedia($media);

    public static function updateMedia($media);

    public static function deleteMedia($media);
}
