<?php

include_once '../core/Membre.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Tidiany
 */
interface IMembre {

    public static function getAllMembre();

    public static function getMembreById($id);

    public static function getMembreByProfil($profil);

    public static function getMembreByEtat_membre($etat_membre);

    public static function getMembreByPseudo($pseudo);

    public static function getMembreByEmail($email);

    public static function getMembreByMatricule($matricule);

    public static function getMembreByLoginAngPassword($login, $password);

    public static function saveMembre($membre);

    public static function updateMembre($membre);

    public static function deleteMembre($membre);

    public static function genererCodeMembre();

    public static function changeEtatMembre($etat, $idMembre);

    public static function valideDmdMembrePro($idMembre, $etat, $profil);
}
