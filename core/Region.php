<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Region
 *
 * @author Tidiany
 */
class Region {

    private $id_region;
    private $id_pays;
    private $nom;
    private $activer;

    function __construct($id_region, $id_pays, $nom, $activer) {
        $this->id_region = $id_region;
        $this->id_pays = $id_pays;
        $this->nom = $nom;
        $this->activer = $activer;
    }

    function getId_region() {
        return $this->id_region;
    }

    function getId_pays() {
        return $this->id_pays;
    }

    function getNom() {
        return $this->nom;
    }

    function getActiver() {
        return $this->activer;
    }

    function setId_region($id_region) {
        $this->id_region = $id_region;
    }

    function setId_pays($id_pays) {
        $this->id_pays = $id_pays;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setActiver($activer) {
        $this->activer = $activer;
    }

}
