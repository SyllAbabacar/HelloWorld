<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../models/IDureeImpl.php';

header("Content-Type: Application/json");
extract($_GET);
$lib_aff = $_GET['affichage'];
$id_act = $_GET['act'];
//var_dump($_GET);
if ($id_act == 'undefined') {
    $id_act = "";
}
$listDuree = IDureeImpl::getDureeByAffichage($lib_aff, $id_act);
echo json_encode($listDuree);
