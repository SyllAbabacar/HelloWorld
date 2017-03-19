<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pays
 *
 * @author Tidiany
 */
class Pays {

    private $id_pays;
    private $nom;
    private $activer;

    function __construct($id_pays, $nom, $activer) {
        $this->id_pays = $id_pays;
        $this->nom = $nom;
        $this->activer = $activer;
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
