<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../models/IMembreImpl.php';

header("Content-Type: Application/json");
extract($_GET);
//var_dump($_GET);
if (isset($id) && !empty($id) && $id != 'undefined') {
    echo json_encode(IMembreImpl::getMembreById($id));
} elseif (isset($idProfil) && !empty($idProfil) && $idProfil != 'undefined') {
    echo json_encode(IMembreImpl::getMembreByProfil($idProfil));
} else {
    echo json_encode(IMembreImpl::getAllMembre());
}

