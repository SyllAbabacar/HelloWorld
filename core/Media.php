<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Media
 *
 * @author Tidiany
 */
class Media {

    private $id_media;
    private $id_annonce;
    private $fichier;
    private $description;

    function __construct($id_media, $id_annonce, $fichier, $description) {
        $this->id_media = $id_media;
        $this->id_annonce = $id_annonce;
        $this->fichier = $fichier;
        $this->description = $description;
    }

    function getId_media() {
        return $this->id_media;
    }

    function getId_annonce() {
        return $this->id_annonce;
    }

    function getFichier() {
        return $this->fichier;
    }

    function getDescription() {
        return $this->description;
    }

    function setId_media($id_media) {
        $this->id_media = $id_media;
    }

    function setId_annonce($id_annonce) {
        $this->id_annonce = $id_annonce;
    }

    function setFichier($fichier) {
        $this->fichier = $fichier;
    }

    function setDescription($description) {
        $this->description = $description;
    }

}
