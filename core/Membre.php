<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Membre
 *
 * @author Tidiany
 */
class Membre {

    private $id_membre;
    private $email;
    private $code;
    private $pseudo;
    private $password;
    private $profil;
    private $jeton;
    private $nom;
    private $prenom;
    private $tel;
    private $adresse;
    private $profession;
    private $date_naissance;
    private $photo;
    private $facebook;
    private $twitter;
    private $google;
    private $youtube;
    private $linkedin;
    private $site;
    private $etat_membre;
    private $date_membre;

    function __construct($id_membre, $email, $code, $pseudo, $password, $profil, $jeton, $nom, $prenom, $tel, $adresse, $profession, $date_naissance, $photo, $facebook, $twitter, $google, $youtube, $linkedin, $site, $etat_membre, $date_membre) {
        $this->id_membre = $id_membre;
        $this->email = $email;
        $this->code = $code;
        $this->pseudo = $pseudo;
        $this->password = $password;
        $this->profil = $profil;
        $this->jeton = $jeton;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tel = $tel;
        $this->adresse = $adresse;
        $this->profession = $profession;
        $this->date_naissance = $date_naissance;
        $this->photo = $photo;
        $this->facebook = $facebook;
        $this->twitter = $twitter;
        $this->google = $google;
        $this->youtube = $youtube;
        $this->linkedin = $linkedin;
        $this->site = $site;
        $this->etat_membre = $etat_membre;
        $this->date_membre = $date_membre;
    }

    function getId_membre() {
        return $this->id_membre;
    }

    function getEmail() {
        return $this->email;
    }

    function getCode() {
        return $this->code;
    }

    function getPseudo() {
        return $this->pseudo;
    }

    function getPassword() {
        return $this->password;
    }

    function getProfil() {
        return $this->profil;
    }

    function getJeton() {
        return $this->jeton;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getTel() {
        return $this->tel;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getProfession() {
        return $this->profession;
    }

    function getDate_naissance() {
        return $this->date_naissance;
    }

    function getPhoto() {
        return $this->photo;
    }

    function getFacebook() {
        return $this->facebook;
    }

    function getTwitter() {
        return $this->twitter;
    }

    function getGoogle() {
        return $this->google;
    }

    function getYoutube() {
        return $this->youtube;
    }

    function getLinkedin() {
        return $this->linkedin;
    }

    function getSite() {
        return $this->site;
    }

    function getEtat_membre() {
        return $this->etat_membre;
    }

    function getDate_membre() {
        return $this->date_membre;
    }

    function setId_membre($id_membre) {
        $this->id_membre = $id_membre;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setCode($code) {
        $this->code = $code;
    }

    function setPseudo($pseudo) {
        $this->pseudo = $pseudo;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setProfil($profil) {
        $this->profil = $profil;
    }

    function setJeton($jeton) {
        $this->jeton = $jeton;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setTel($tel) {
        $this->tel = $tel;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setProfession($profession) {
        $this->profession = $profession;
    }

    function setDate_naissance($date_naissance) {
        $this->date_naissance = $date_naissance;
    }

    function setPhoto($photo) {
        $this->photo = $photo;
    }

    function setFacebook($facebook) {
        $this->facebook = $facebook;
    }

    function setTwitter($twitter) {
        $this->twitter = $twitter;
    }

    function setGoogle($google) {
        $this->google = $google;
    }

    function setYoutube($youtube) {
        $this->youtube = $youtube;
    }

    function setLinkedin($linkedin) {
        $this->linkedin = $linkedin;
    }

    function setSite($site) {
        $this->site = $site;
    }

    function setEtat_membre($etat_membre) {
        $this->etat_membre = $etat_membre;
    }

    function setDate_membre($date_membre) {
        $this->date_membre = $date_membre;
    }

}
