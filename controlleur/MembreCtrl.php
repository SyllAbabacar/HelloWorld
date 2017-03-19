<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../models/IMembreImpl.php';

$membre = json_decode(file_get_contents("php://input"));
//var_dump($membre);
if (isset($membre->email) && isset($membre->password) && isset($membre->pseudo)) {
    $profil = isset($membre->profil) ? $membre->profil : '';
    $photo = isset($membre->photo) ? $membre->photo : 'profil.jpg';
    $pseudo = isset($membre->pseudo) ? $membre->pseudo : '';
    $email = isset($membre->email) ? $membre->email : '';
    $password = isset($membre->password) ? $membre->password : '';
    $nom = isset($membre->nom) ? $membre->nom : '';
    $prenom = isset($membre->prenom) ? $membre->prenom : '';
    $adresse = isset($membre->adresse) ? $membre->adresse : '';
    $datenaiss = isset($membre->datenaiss) ? $membre->datenaiss : '';
    $tel = isset($membre->telephone) ? $membre->telephone : '';
    $profession = isset($membre->profession) ? $membre->profession : '';
    $facebook = isset($membre->facebook) ? $membre->facebook : '';
    $twitter = isset($membre->twitter) ? $membre->twitter : '';
    $google = isset($membre->google) ? $membre->google : '';
    $youtube = isset($membre->youtube) ? $membre->youtube : '';
    $linkedin = isset($membre->linkedin) ? $membre->linkedin : '';
    $site = isset($membre->site) ? $membre->site : '';
    $etat = isset($membre->etat) ? $membre->etat : '';
    $membre = new Membre(0, $email, '', $pseudo, md5(sha1($password, TRUE)), $profil, Fabrique::chaine(35), $nom, $prenom, $tel, $adresse, $profession, $datenaiss, $photo, $facebook, $twitter, $google, $youtube, $linkedin, $site, $etat, '');
    $result = IMembreImpl::saveMembre($membre);
    if ($result === 'pseudo exist') {
        echo 'pseudo exist';
    } elseif ($result === 'email exist') {
        echo '!email';
    } elseif ($result === 'echec') {
        echo '!confirmation';
    } elseif ($result === FALSE) {
        echo '!insert';
    } elseif ($result === TRUE) {
        echo 'ok';
    }
} else {
    echo 'false';
}
