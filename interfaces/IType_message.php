<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Tidiany
 */
interface IType_message {

    public static function getAllType_message();

    public static function getType_messageById($id);

    public static function saveType_message($type_message);

    public static function updateType_message($type_message);

    public static function deleteType_message($type_message);
}
