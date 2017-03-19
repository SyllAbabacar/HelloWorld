<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Activite
 *
 * @author Tidiany
 */
class Activite {

    private $id_activite;
    private $lib_activite;
    private $desc_activite;

    function __construct($id_activite, $lib_activite, $desc_activite) {
        $this->id_activite = $id_activite;
        $this->lib_activite = $lib_activite;
        $this->desc_activite = $desc_activite;
    }

    function getId_activite() {
        return $this->id_activite;
    }

    function getLib_activite() {
        return $this->lib_activite;
    }

    function getDesc_activite() {
        return $this->desc_activite;
    }

    function setId_activite($id_activite) {
        $this->id_activite = $id_activite;
    }

    function setLib_activite($lib_activite) {
        $this->lib_activite = $lib_activite;
    }

    function setDesc_activite($desc_activite) {
        $this->desc_activite = $desc_activite;
    }

}
