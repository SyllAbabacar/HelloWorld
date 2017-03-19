<?php

//session_start();

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../models/IMembreImpl.php';
include_once '../services/Session.php';
Session::initSession();

$data = json_decode(file_get_contents("php://input"));
//var_dump($data);
if (isset($data->log) && isset($data->pass)) {
    $login = $data->log;
    $mpass = $data->pass;
    $user = IMembreImpl::getMembreByLoginAngPassword($login, $mpass);
    if ($user == NULL) {
        echo 'LogError';
    }
//    elseif ($user == 'en_attente') {
//        echo 'en_attente';
//    }
    elseif ($user == 'desactiver') {
        echo 'desactiver';
    } else {
        Session::setUserSession($user);
        $_SESSION['user'] = $user;
        echo json_encode($user);
    }
} else {
    echo 'false';
}
