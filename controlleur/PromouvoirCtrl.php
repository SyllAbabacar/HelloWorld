<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../models/IAffichageImpl.php';

header("Content-Type: Application/json");
extract($_GET);
//var_dump($_GET);
if (isset($idAff) && !empty($idAff) && $idAff != 'undefined') {
    $affichage = IAffichageImpl::getAffichageById($idAff);
    echo json_encode($affichage);
} else {
    $listeAffichage = IAffichageImpl::getAllAffichage();
//    var_dump($listeAffichage);
    echo json_encode($listeAffichage);
}

