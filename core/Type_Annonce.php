<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Type_Annonce
 *
 * @author Tidiany
 */
class Type_Annonce {

    private $id_type_annonce;
    private $libelle;
    private $activite;

    function __construct($id_type_annonce, $libelle, $activite) {
        $this->id_type_annonce = $id_type_annonce;
        $this->libelle = $libelle;
        $this->activite = $activite;
    }

    function getId_type_annonce() {
        return $this->id_type_annonce;
    }

    function getLibelle() {
        return $this->libelle;
    }

    function getActivite() {
        return $this->activite;
    }

    function setId_type_annonce($id_type_annonce) {
        $this->id_type_annonce = $id_type_annonce;
    }

    function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    function setActivite($activite) {
        $this->activite = $activite;
    }

}
