<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../models/IRegionImpl.php';

header("Content-Type: Application/json");
extract($_GET);
//var_dump($_GET);
$listRegion = IRegionImpl::getAllRegion();
echo json_encode($listRegion);
