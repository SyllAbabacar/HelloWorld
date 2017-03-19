<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of connexion
 *
 * @author Tidiany
 */
class Connexion {

    private $id_connexion;
    private $membre;
    private $jeton;
    private $date;
    private $ip;
    private $support;

    function __construct($id_connexion, $membre, $jeton, $date, $ip, $support) {
        $this->id_connexion = $id_connexion;
        $this->membre = $membre;
        $this->jeton = $jeton;
        $this->date = $date;
        $this->ip = $ip;
        $this->support = $support;
    }

    function getId_connexion() {
        return $this->id_connexion;
    }

    function getMembre() {
        return $this->membre;
    }

    function getJeton() {
        return $this->jeton;
    }

    function getDate() {
        return $this->date;
    }

    function getIp() {
        return $this->ip;
    }

    function getSupport() {
        return $this->support;
    }

    function setId_connexion($id_connexion) {
        $this->id_connexion = $id_connexion;
    }

    function setMembre($membre) {
        $this->membre = $membre;
    }

    function setJeton($jeton) {
        $this->jeton = $jeton;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setIp($ip) {
        $this->ip = $ip;
    }

    function setSupport($support) {
        $this->support = $support;
    }

}
