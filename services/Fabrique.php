<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Fabrique
 *
 * @author Tidiany
 */
class Fabrique {

    // creation d'une chaine aleatoire
    public static function chaine($nb_car, $chaine = 'AZERTYUIOPQSDFGHJKLMWXCVBNazertyuiopqsdfghjklmwxcvbn123456789') {
        $nb_lettres = strlen($chaine) - 1;
        $generation = '';
        for ($i = 0; $i < $nb_car; $i++) {
            $pos = mt_rand(0, $nb_lettres);
            $car = $chaine[$pos];
            $generation .= $car;
        }
        return $generation;
    }

    public static function upLoadImg() {
        if (isset($_FILES) && !empty($_FILES)) {
            $photo = $_FILES['file']['name'];
            $tempPath = $_FILES['file']['tmp_name'];
//    //move_uploaded_file($tempPath, $uploadPath);
            $uploadPath = 'img/' . $photo;
            if (copy($tempPath, $uploadPath)) {
                return $photo;
            } else {
                return 'Erreur de copie';
            }
        }
    }

}
