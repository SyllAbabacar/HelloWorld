<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../models/IActiviteImpl.php';

header("Content-Type: Application/json");
$listActivite = IActiviteImpl::getAllActivite();
//var_dump($listActivite);
echo json_encode($listActivite);
