<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of affichage
 *
 * @author Tidiany
 */
class Affichage {

    private $id_affichage;
    private $lib_affichage;
    private $etat_affichage;

    function __construct($id_affichage, $lib_affichage, $etat_affichage) {
        $this->id_affichage = $id_affichage;
        $this->lib_affichage = $lib_affichage;
        $this->etat_affichage = $etat_affichage;
    }

    function getId_affichage() {
        return $this->id_affichage;
    }

    function getLib_affichage() {
        return $this->lib_affichage;
    }

    function getEtat_affichage() {
        return $this->etat_affichage;
    }

    function setId_affichage($id_affichage) {
        $this->id_affichage = $id_affichage;
    }

    function setLib_affichage($lib_affichage) {
        $this->lib_affichage = $lib_affichage;
    }

    function setEtat_affichage($etat_affichage) {
        $this->etat_affichage = $etat_affichage;
    }

}
