<?php

include_once '../core/Commentaire.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Tidiany
 */
interface ICommentaire {

    public static function getAllCommentaire();

    public static function getCommentaireById($id);

    public static function getCommentaireByAnnonce($annonce);

    public static function saveCommentaire($commentaire);

    public static function updateCommentaire($commentaire);

    public static function deleteCommentaire($commentaire);
}
