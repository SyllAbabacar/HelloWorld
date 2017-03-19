<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../models/IDureeImpl.php';

$data = json_decode(file_get_contents("php://input"));

//var_dump($data);
//$data->datedeb >= date() && 
if (isset($data->zone) && isset($data->datedeb) && isset($data->datefin)) {
    if ($data->datedeb <= $data->datefin) {
        IDureeImpl::saveDuree(new Duree(NULL, $data->idAnn, $data->zone, $data->datedeb, $data->datefin));
    } else {
        echo 'date invalid';
    }
} else {
    echo 'false';
}