<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../models/IMessageImpl.php';

$data = json_decode(file_get_contents("php://input"));

var_dump($data);

if (isset($data->nom) && isset($data->email) && isset($data->objet) && isset($data->contenu)) {
    IMessageImpl::saveMessage(new Message(0, $data->objet, $data->contenu, '', 0, $data->nom, $data->email, intval($data->id_destinataire), intval($data->id_annonce), $data->etat));
} else {
    echo 'false';
}
