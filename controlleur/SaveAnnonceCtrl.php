<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../core/Annonce.php';
include_once '../models/IAnnonceImpl.php';
include_once '../models/IMembreImpl.php';

$data = json_decode(file_get_contents("php://input"));
//var_dump($_SESSION['user']);
//var_dump($data);

if (isset($data->activite) && isset($data->typeannonce) && isset($data->localite) && isset($data->transaction) && isset($data->adresse) && isset($data->libelle) && isset($data->montant) && isset($data->description)) {
//new Annonce($id_annonce, $date_creation, $reference, $localite, $type_annonce, $proprietaire, $montant, $libelle, $description, $adresse, $transaction, $etat_annonce, $superviseur, $courtier);
    $annonce = new Annonce(0, '', IAnnonceImpl::genereRefAnnonce(), $data->localite, $data->typeannonce, $_SESSION['user']->id_membre, $data->montant, $data->libelle, $data->description, $data->adresse, $data->transaction, 0, 0, 0);
    if (isset($data->matricule) && !empty($data->matricule)) {
        $membre = IMembreImpl::getMembreByMatricule($data->matricule);
        if ($membre == NULL) {
            echo '!Matricule';
            return;
        } else {
            $annonce->setCourtier($membre->id_membre);
        }
    }
    if ($_SESSION['user']->profil == 3) {
        $annonce->setCourtier($_SESSION['user']->id_membre);
        $annonce->setEtat_annonce(1);
    }
    echo IAnnonceImpl::saveAnnonce($annonce);
} else {
    echo 'false';
}
