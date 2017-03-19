<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Profile
 *
 * @author Tidiany
 */
class Profile {

    private $id_profile;
    private $libelle;
    private $description;

    function __construct($id_profile, $libelle, $description) {
        $this->id_profile = $id_profile;
        $this->libelle = $libelle;
        $this->description = $description;
    }

    function getId_profile() {
        return $this->id_profile;
    }

    function getLibelle() {
        return $this->libelle;
    }

    function getDescription() {
        return $this->description;
    }

    function setId_profile($id_profile) {
        $this->id_profile = $id_profile;
    }

    function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    function setDescription($description) {
        $this->description = $description;
    }

}
