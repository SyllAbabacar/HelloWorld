<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../models/IDureeImpl.php';

header("Content-Type: Application/json");
extract($_GET);
//$id = $_GET['idAnn'];
//var_dump($_GET);
$listAffichage = '';
if (isset($_GET['idAnn']) && !empty($_GET['idAnn']) && $_GET['idAnn'] != 'undefined'):
    $listAffichage = IDureeImpl::getDureeByAnnonce($idAnn);
elseif (isset($_GET['idDuree']) && !empty($_GET['idDuree']) && $_GET['idDuree'] != 'undefined'):
    $listAffichage = IDureeImpl::getDureeById($idDuree);
else:
    $listAffichage = IDureeImpl::getAllDuree();
endif;
echo json_encode($listAffichage);
