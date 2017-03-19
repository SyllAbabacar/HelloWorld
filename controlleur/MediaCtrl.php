<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../models/IMediaImpl.php';

$data = json_decode(file_get_contents("php://input"));
//var_dump($data);

if (isset($data->tof)) {
    $rst = IMediaImpl::saveMedia(new Media(0, $data->id_ann, $data->tof, $data->desc));
//    var_dump($rst);
    if ($rst === -1) {
        echo '!limit';
    }
} else {
    echo 'false';
}
