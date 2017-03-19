<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Duree
 *
 * @author Tidiany
 */
class Duree {

    private $id_duree;
    private $annonce;
    private $affichage;
    private $date_debut_duree;
    private $date_fin_duree;

    function __construct($id_duree, $annonce, $affichage, $date_debut_duree, $date_fin_duree) {
        $this->id_duree = $id_duree;
        $this->annonce = $annonce;
        $this->affichage = $affichage;
        $this->date_debut_duree = $date_debut_duree;
        $this->date_fin_duree = $date_fin_duree;
    }

    function getId_duree() {
        return $this->id_duree;
    }

    function getAnnonce() {
        return $this->annonce;
    }

    function getAffichage() {
        return $this->affichage;
    }

    function getDate_debut_duree() {
        return $this->date_debut_duree;
    }

    function getDate_fin_duree() {
        return $this->date_fin_duree;
    }

    function setId_duree($id_duree) {
        $this->id_duree = $id_duree;
    }

    function setAnnonce($annonce) {
        $this->annonce = $annonce;
    }

    function setAffichage($affichage) {
        $this->affichage = $affichage;
    }

    function setDate_debut_duree($date_debut_duree) {
        $this->date_debut_duree = $date_debut_duree;
    }

    function setDate_fin_duree($date_fin_duree) {
        $this->date_fin_duree = $date_fin_duree;
    }

}
