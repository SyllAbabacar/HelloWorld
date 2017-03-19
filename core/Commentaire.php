<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of commentaire
 *
 * @author Tidiany
 */
class Commentaire {

    private $id_commentaire;
    private $membre;
    private $annonce;
    private $contenu;
    private $date;

    function __construct($id_commentaire, $membre, $annonce, $contenu, $date) {
        $this->id_commentaire = $id_commentaire;
        $this->membre = $membre;
        $this->annonce = $annonce;
        $this->contenu = $contenu;
        $this->date = $date;
    }

    function getId_commentaire() {
        return $this->id_commentaire;
    }

    function getMembre() {
        return $this->membre;
    }

    function getAnnonce() {
        return $this->annonce;
    }

    function getContenu() {
        return $this->contenu;
    }

    function getDate() {
        return $this->date;
    }

    function setId_commentaire($id_commentaire) {
        $this->id_commentaire = $id_commentaire;
    }

    function setMembre($membre) {
        $this->membre = $membre;
    }

    function setAnnonce($annonce) {
        $this->annonce = $annonce;
    }

    function setContenu($contenu) {
        $this->contenu = $contenu;
    }

    function setDate($date) {
        $this->date = $date;
    }

}
