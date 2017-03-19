<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../services/Session.php';
Session::initSession();

$data = json_decode(file_get_contents("php://input"));
//var_dump($data);
Session::setUserSession(NULL);
session_unset();
if (Session::isSessionExit()) {
    echo '1';
} else {
    echo '0';
}
