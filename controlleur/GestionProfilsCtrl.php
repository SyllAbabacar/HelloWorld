<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../models/IMembreImpl.php';
include_once '../services/Fabrique.php';

$data = json_decode(file_get_contents("php://input"));

//echo $tof != '' ? $tof : 'No file selected';
//var_dump($data);
$id_membre = $data->id_user;
$email = $data->email;
$code = '';
$pseudo = $data->pseudo;
$profil = '';
$nom = $data->nom;
$prenom = $data->prenom;
$tel = $data->tel;
$adresse = $data->adresse;
$profession = $data->profession;
$date_naissance = $data->date_naiss;
$photo = $data->photo;
$facebook = $data->facebook;
$twitter = $data->twitter;
$google = $data->google;
$youtube = isset($data->youtube) ? $data->youtube : '';
$linkedin = isset($data->linkedin) ? $data->linkedin : '';
$site = $data->site;
$etat_membre = $data->etat;
$date_membre = '';
$password = '';
$jeton = '';
//if (isset($data->activite) && isset($data->typeannonce) && isset($data->localite) && isset($data->transaction) && isset($data->adresse) && isset($data->libelle) && isset($data->montant) && isset($data->description)) {
$membre = new Membre($id_membre, $email, $code, $pseudo, $password, $profil, $jeton, $nom, $prenom, $tel, $adresse, $profession, $date_naissance, $photo, $facebook, $twitter, $google, $youtube, $linkedin, $site, $etat_membre, $date_membre);
IMembreImpl::updateMembre($membre);
//} else {
//    echo 'false';
//}

