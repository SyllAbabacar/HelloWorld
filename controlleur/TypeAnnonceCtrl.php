<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../models/IType_annonceImpl.php';

header("Content-Type: Application/json");
$listTypeAnnonce = IType_annonceImpl::getAllType_annonce();
echo json_encode($listTypeAnnonce);
