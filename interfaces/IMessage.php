<?php

include_once '../core/Message.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Tidiany
 */
interface IMessage {

    public static function getAllMessage();

    public static function getMessageById($id);

    public static function getMessageByEtat($etat);

    public static function getMessageByAnnonce($annonce);

    public static function getMessageByProprietaire($proprietaire);

    public static function saveMessage($message);

    public static function updateMessage($message);

    public static function deleteMessage($message);
}
