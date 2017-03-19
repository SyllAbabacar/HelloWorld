<?php

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
IMembreImpl::valideDmdMembrePro($data->user->id_membre, 1, 3);

