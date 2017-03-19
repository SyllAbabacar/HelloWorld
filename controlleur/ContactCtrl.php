<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../models/IMessageImpl.php';

$data = json_decode(file_get_contents("php://input"));
//var_dump($data);
if (isset($data->contact->nom) && isset($data->contact->email) && isset($data->contact->objet) && isset($data->contact->message)) {
//    new Message($id_message, $objet_message, $contenu_message, $date_message, $etat, $nom, $email, $destinataire, $annonce, $type_message);
    IMessageImpl::saveMessage(new Message(0, $data->contact->objet, $data->contact->message, '', 0, $data->contact->nom, $data->contact->email, 0, 0, 3));
} else {
    echo 'false';
}
