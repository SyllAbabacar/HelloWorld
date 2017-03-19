<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Localite
 *
 * @author Tidiany
 */
class Localite {

    private $id_localite;
    private $region;
    private $nom;
    private $description;

    function __construct($id_localite, $region, $nom, $description) {
        $this->id_localite = $id_localite;
        $this->region = $region;
        $this->nom = $nom;
        $this->description = $description;
    }

    function getId_localite() {
        return $this->id_localite;
    }

    function getRegion() {
        return $this->region;
    }

    function getNom() {
        return $this->nom;
    }

    function getDescription() {
        return $this->description;
    }

    function setId_localite($id_localite) {
        $this->id_localite = $id_localite;
    }

    function setRegion($region) {
        $this->region = $region;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setDescription($description) {
        $this->description = $description;
    }

}
