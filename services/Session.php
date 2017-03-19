<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Session
 *
 * @author Tidiany
 */
class Session {

    public static function initSession() {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    public static function setUserSession($val) {
        $_SESSION['user'] = $val;
    }

    public static function getUserSession() {
        return $_SESSION['user'];
    }

    public static function isSessionExit() {
        if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public static function getPhoto() {
        if (self::isSessionExit()) {
            return $_SESSION['user']->photo;
        }
    }

    public static function getIdProfil() {
        if (self::isSessionExit()) {
            return $_SESSION['user']->profil;
        }
    }

    public static function getLibProfil() {
        if (self::isSessionExit()) {
            return $_SESSION['user']->monProfil->libelle;
        }
    }

    public static function getPseudo() {
        if (self::isSessionExit()) {
            return $_SESSION['user']->pseudo;
        }
    }

    public static function getEmail() {
        if (self::isSessionExit()) {
            return $_SESSION['user']->email;
        }
    }

    public static function getNom() {
        if (self::isSessionExit()) {
            return $_SESSION['user']->nom;
        }
    }

    public static function getPrenom() {
        if (self::isSessionExit()) {
            return $_SESSION['user']->prenom;
        }
    }

    public static function getAdresse() {
        if (self::isSessionExit()) {
            return $_SESSION['user']->adresse;
        }
    }

    public static function getDateNaiss() {
        if (self::isSessionExit()) {
            return $_SESSION['user']->date_naissance;
        }
    }

    public static function getTel() {
        if (self::isSessionExit()) {
            return $_SESSION['user']->tel;
        }
    }

    public static function getProfession() {
        if (self::isSessionExit()) {
            return $_SESSION['user']->profession;
        }
    }

    public static function getFacebook() {
        if (self::isSessionExit()) {
            return $_SESSION['user']->facebook;
        }
    }

    public static function getTwetter() {
        if (self::isSessionExit()) {
            return $_SESSION['user']->twitter;
        }
    }

    public static function getGoogle() {
        if (self::isSessionExit()) {
            return $_SESSION['user']->google;
        }
    }

    public static function getYoutube() {
        if (self::isSessionExit()) {
            return $_SESSION['user']->youtube;
        }
    }

    public static function getLinkedin() {
        if (self::isSessionExit()) {
            return $_SESSION['user']->linkedin;
        }
    }

    public static function getSite() {
        if (self::isSessionExit()) {
            return $_SESSION['user']->site;
        }
    }

    public static function getEtat() {
        if (self::isSessionExit()) {
            return $_SESSION['user']->etat_membre;
        }
    }

    public static function getIdUser() {
        if (self::isSessionExit()) {
            return $_SESSION['user']->id_membre;
        } else {
            return 0;
        }
    }

}
