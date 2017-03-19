<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../models/ILocaliteImpl.php';

header("Content-Type: Application/json");
extract($_GET);
//var_dump($_GET);
$listLocalite = ILocaliteImpl::getAllLocalite();
echo json_encode($listLocalite);
