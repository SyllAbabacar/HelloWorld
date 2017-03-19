<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Annonce
 *
 * @author Tidiany
 */
class Annonce {

    private $id_annonce;
    private $date_creation;
    private $reference;
    private $localite;
    private $type_annonce;
    private $proprietaire;
    private $montant;
    private $libelle;
    private $description;
    private $adresse;
    private $transaction;
    private $etat_annonce;
    private $superviseur;
    private $courtier;

    function __construct($id_annonce, $date_creation, $reference, $localite, $type_annonce, $proprietaire, $montant, $libelle, $description, $adresse, $transaction, $etat_annonce, $superviseur, $courtier) {
        $this->id_annonce = $id_annonce;
        $this->date_creation = $date_creation;
        $this->reference = $reference;
        $this->localite = $localite;
        $this->type_annonce = $type_annonce;
        $this->proprietaire = $proprietaire;
        $this->montant = $montant;
        $this->libelle = $libelle;
        $this->description = $description;
        $this->adresse = $adresse;
        $this->transaction = $transaction;
        $this->etat_annonce = $etat_annonce;
        $this->superviseur = $superviseur;
        $this->courtier = $courtier;
    }

    function getId_annonce() {
        return $this->id_annonce;
    }

    function getDate_creation() {
        return $this->date_creation;
    }

    function getReference() {
        return $this->reference;
    }

    function getLocalite() {
        return $this->localite;
    }

    function getType_annonce() {
        return $this->type_annonce;
    }

    function getProprietaire() {
        return $this->proprietaire;
    }

    function getMontant() {
        return $this->montant;
    }

    function getLibelle() {
        return $this->libelle;
    }

    function getDescription() {
        return $this->description;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getTransaction() {
        return $this->transaction;
    }

    function getEtat_annonce() {
        return $this->etat_annonce;
    }

    function getSuperviseur() {
        return $this->superviseur;
    }

    function getCourtier() {
        return $this->courtier;
    }

    function setId_annonce($id_annonce) {
        $this->id_annonce = $id_annonce;
    }

    function setDate_creation($date_creation) {
        $this->date_creation = $date_creation;
    }

    function setReference($reference) {
        $this->reference = $reference;
    }

    function setLocalite($localite) {
        $this->localite = $localite;
    }

    function setType_annonce($type_annonce) {
        $this->type_annonce = $type_annonce;
    }

    function setProprietaire($proprietaire) {
        $this->proprietaire = $proprietaire;
    }

    function setMontant($montant) {
        $this->montant = $montant;
    }

    function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setTransaction($transaction) {
        $this->transaction = $transaction;
    }

    function setEtat_annonce($etat_annonce) {
        $this->etat_annonce = $etat_annonce;
    }

    function setSuperviseur($superviseur) {
        $this->superviseur = $superviseur;
    }

    function setCourtier($courtier) {
        $this->courtier = $courtier;
    }

}
