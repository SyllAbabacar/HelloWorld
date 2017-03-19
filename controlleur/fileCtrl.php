<?php

include_once '../models/IAnnonceImpl.php';

header("Content-Type: Application/json");
$response = array();
//var_dump($_FILES);
//echo 'azertyuio';
if (isset($_FILES) && !empty($_FILES)) {
    $tempPath = $_FILES['file']['tmp_name'];
    $uploadPath = '../web/images/courtage/' . $_FILES['file']['name'];
//    echo $uploadPath;
//move_uploaded_file($tempPath, $uploadPath);
    if (copy($tempPath, $uploadPath)) {
        header('Content-Type: application/json');
//        $response = $_FILES['file']['name'];
        $response = json_encode($_FILES['file']['name']);
        echo $response;
    } else {
        echo 'echec_upload';
    }
} else {
    echo 'false';
}