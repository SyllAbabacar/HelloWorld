<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//include_once '../models/DB.php';
include_once '../models/IAnnonceImpl.php';

header("Content-Type: Application/json");
extract($_GET);
//var_dump($_GET);
//echo '<hr>';
if (isset($activite) && !empty($activite) && $activite != "undefined") {
    if (isset($typeAnn) && !empty($typeAnn) && $typeAnn != "undefined") {
        $listeAnnonce = IAnnonceImpl::getAnnonceByType_annonce($typeAnn);
        echo json_encode($listeAnnonce);
    } else {
        $listeAnnonce = IAnnonceImpl::getAnnonceByActivite($activite);
        echo json_encode($listeAnnonce);
    }
} elseif (isset($rech) && !empty($rech) && $rech != "undefined") {
    $listeAnnonce = IAnnonceImpl::rechAnnonce($rech);
    echo json_encode($listeAnnonce);
} elseif (isset($propri) && !empty($propri) && $propri != "undefined") {
    $listeAnnonce = IAnnonceImpl::getAnnonceByProprietaire($propri);
    echo json_encode($listeAnnonce);
} elseif (isset($idann) && !empty($idann) && $idann != "undefined") {
    $listeAnnonce = IAnnonceImpl::getAnnonceById($idann);
    echo json_encode($listeAnnonce);
} else {
    $listeAnnonce = IAnnonceImpl::getAllAnnonce();
    echo json_encode($listeAnnonce);
}
