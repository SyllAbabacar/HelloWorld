<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Publication
 *
 * @author Tidiany
 */
class Publication {

    private $id_publication;
    private $titre_publication;
    private $contenu_publication;
    private $activite;
    private $membre;

    function __construct($id_publication, $titre_publication, $contenu_publication, $activite, $membre) {
        $this->id_publication = $id_publication;
        $this->titre_publication = $titre_publication;
        $this->contenu_publication = $contenu_publication;
        $this->activite = $activite;
        $this->membre = $membre;
    }

    function getId_publication() {
        return $this->id_publication;
    }

    function getTitre_publication() {
        return $this->titre_publication;
    }

    function getContenu_publication() {
        return $this->contenu_publication;
    }

    function getActivite() {
        return $this->activite;
    }

    function getMembre() {
        return $this->membre;
    }

    function setId_publication($id_publication) {
        $this->id_publication = $id_publication;
    }

    function setTitre_publication($titre_publication) {
        $this->titre_publication = $titre_publication;
    }

    function setContenu_publication($contenu_publication) {
        $this->contenu_publication = $contenu_publication;
    }

    function setActivite($activite) {
        $this->activite = $activite;
    }

    function setMembre($membre) {
        $this->membre = $membre;
    }

}
