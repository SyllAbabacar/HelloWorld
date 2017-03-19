<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../models/IType_messageImpl.php';

header("Content-Type: Application/json");
extract($_GET);
//var_dump($_GET);
$listTypeMess = IType_messageImpl::getAllType_message();
echo json_encode($listTypeMess);

