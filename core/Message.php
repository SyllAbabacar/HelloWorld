<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Message
 *
 * @author Tidiany
 */
class Message {

    private $id_message;
    private $objet_message;
    private $contenu_message;
    private $date_message;
    private $etat;
    private $nom;
    private $email;
    private $destinataire;
    private $annonce;
    private $type_message;

    function __construct($id_message, $objet_message, $contenu_message, $date_message, $etat, $nom, $email, $destinataire, $annonce, $type_message) {
        $this->id_message = $id_message;
        $this->objet_message = $objet_message;
        $this->contenu_message = $contenu_message;
        $this->date_message = $date_message;
        $this->etat = $etat;
        $this->nom = $nom;
        $this->email = $email;
        $this->destinataire = $destinataire;
        $this->annonce = $annonce;
        $this->type_message = $type_message;
    }

    function getId_message() {
        return $this->id_message;
    }

    function getObjet_message() {
        return $this->objet_message;
    }

    function getContenu_message() {
        return $this->contenu_message;
    }

    function getDate_message() {
        return $this->date_message;
    }

    function getEtat() {
        return $this->etat;
    }

    function getNom() {
        return $this->nom;
    }

    function getEmail() {
        return $this->email;
    }

    function getDestinataire() {
        return $this->destinataire;
    }

    function getAnnonce() {
        return $this->annonce;
    }

    function getType_message() {
        return $this->type_message;
    }

    function setId_message($id_message) {
        $this->id_message = $id_message;
    }

    function setObjet_message($objet_message) {
        $this->objet_message = $objet_message;
    }

    function setContenu_message($contenu_message) {
        $this->contenu_message = $contenu_message;
    }

    function setDate_message($date_message) {
        $this->date_message = $date_message;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setDestinataire($destinataire) {
        $this->destinataire = $destinataire;
    }

    function setAnnonce($annonce) {
        $this->annonce = $annonce;
    }

    function setType_message($type_message) {
        $this->type_message = $type_message;
    }

}
