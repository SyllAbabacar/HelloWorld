<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../models/IMessageImpl.php';

header("Content-Type: Application/json");
extract($_GET);
//var_dump($_GET);
if (isset($idann) && !empty($idann) && $idann != 'undefined') {
    $listMess = IMessageImpl::getMessageByAnnonce($idann);
    echo json_encode($listMess);
} elseif (isset($idmess) && !empty($idmess) && $idmess != 'undefined') {
    IMessageImpl::updateMessage($idmess);
    $mess = IMessageImpl::getMessageById($idmess);
    echo json_encode($mess);
} elseif (isset($iduser) && !empty($iduser) && $iduser != 'undefined') {
    $listMess = IMessageImpl::getMessageByProprietaire($iduser);
    echo json_encode($listMess);
} else {
    $listMess = IMessageImpl::getAllMessage();
    echo json_encode($listMess);
}