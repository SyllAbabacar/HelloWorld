<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../models/ICommentaireImpl.php';
include_once '../services/Session.php';
Session::initSession();

$data = json_decode(file_get_contents("php://input"));
//var_dump($data);
ICommentaireImpl::saveCommentaire(new Commentaire(0, Session::getIdUser(), $data->id_ann, $data->commentaire, ''));

