<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../models/IAnnonceImpl.php';

$data = json_decode(file_get_contents("php://input"));
//var_dump($data);
if (isset($data->id_comm)) {
    IAnnonceImpl::validAnnonce($data->id_ann, $data->id_comm);
} else {
    echo 'false';
}
