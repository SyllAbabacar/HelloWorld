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
$listDuree = IDureeImpl::getDureeByAffichage($lib_aff);
echo json_encode($listDuree);
