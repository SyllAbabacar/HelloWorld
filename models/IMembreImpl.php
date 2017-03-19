<?php

include_once '../models/DB.php';
include_once '../interfaces/IMembre.php';
include_once '../models/IProfilImpl.php';
include_once '../models/IAnnonceImpl.php';
include_once '../services/Fabrique.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IMembreImpl
 *
 * @author Tidiany
 */
class IMembreImpl implements IMembre {

    public static function deleteMembre($membre) {
        try {
            $sql = DB::connect()->prepare("delete from membre where id_membre = ?");
            $sql->bindValue(1, $membre->getId_membre(), PDO::PARAM_INT);
            if ($sql->execute())
                return true;
            else
                return false;
        } catch (Exception $e) {
            echo $e;
        }
    }

    public static function getAllMembre() {
        $listeMembres = array();
        $req = DB::connect()->prepare("select * from membre");
        $req->execute();
        while ($obj = $req->fetchObject()) {
            $obj->monProfil = IProfilImpl::getProfilsById($obj->profil);
            array_push($listeMembres, $obj);
        }
        return $listeMembres;
    }

    public static function getMembreByEtat_membre($etat_membre) {
        $listeMembres = array();
        $req = DB::connect()->prepare("select * from membre where etat_membre = ?");
        $req->bindValue(1, $etat_membre, PDO::PARAM_INT);
        $req->execute();
        while ($obj = $req->fetchObject()) {
            $obj->monProfil = IProfilImpl::getProfilsById($obj->profil);
            array_push($listeMembres, $obj);
        }
    }

    public static function getMembreById($id) {
        $req = DB::connect()->prepare("select * from membre where id_membre = ?");
        $req->bindValue(1, $id, PDO::PARAM_INT);
        $req->execute();
        if ($obj = $req->fetchObject()) {
            $obj->monProfil = IProfilImpl::getProfilsById($obj->profil);
            $obj->listAnnonces = IAnnonceImpl::getAnnonceByProprietaire($obj->id_membre);
            return $obj;
        } else {
            return NULL;
        }
    }

    public static function getMembreByProfil($profil) {
        $listeMembres = array();
        $req = DB::connect()->prepare("select * from membre where profil = ?");
        $req->bindValue(1, $profil, PDO::PARAM_INT);
        $req->execute();
        while ($obj = $req->fetchObject()) {
            array_push($listeMembres, $obj);
        }
        return $listeMembres;
//        var_dump($listeMembres);
    }

    public static function saveMembre($membre) {
//        var_dump($membre);
        $user = self::getMembreByPseudo($membre->getPseudo());
        if (isset($user->pseudo) && $user->pseudo === $membre->getPseudo()) {
            return 'pseudo exist';
        }
        $user = self::getMembreByEmail($membre->getEmail());
        if (isset($user->email) && $user->email === $membre->getEmail()) {
            return 'email exist';
        }
        try {
            $sql = DB::connect()->prepare("INSERT INTO membre VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,Now())");
            $sql->bindValue(1, $membre->getEmail(), PDO::PARAM_STR);
            $sql->bindValue(2, self::genererCodeMembre(), PDO::PARAM_STR);
            $sql->bindValue(3, $membre->getPseudo(), PDO::PARAM_STR);
            $sql->bindValue(4, $membre->getPassword(), PDO::PARAM_STR);
            $sql->bindValue(5, $membre->getProfil(), PDO::PARAM_INT);
            $sql->bindValue(6, $membre->getJeton(), PDO::PARAM_STR);
            $sql->bindValue(7, $membre->getNom(), PDO::PARAM_STR);
            $sql->bindValue(8, $membre->getPrenom(), PDO::PARAM_STR);
            $sql->bindValue(9, $membre->getTel(), PDO::PARAM_STR);
            $sql->bindValue(10, $membre->getAdresse(), PDO::PARAM_STR);
            $sql->bindValue(11, $membre->getProfession(), PDO::PARAM_STR);
            $sql->bindValue(12, $membre->getDate_naissance());
            $sql->bindValue(13, $membre->getPhoto(), PDO::PARAM_STR);
            $sql->bindValue(14, $membre->getFacebook(), PDO::PARAM_STR);
            $sql->bindValue(15, $membre->getTwitter(), PDO::PARAM_STR);
            $sql->bindValue(16, $membre->getGoogle(), PDO::PARAM_STR);
            $sql->bindValue(17, $membre->getYoutube(), PDO::PARAM_STR);
            $sql->bindValue(18, $membre->getLinkedin(), PDO::PARAM_STR);
            $sql->bindValue(19, $membre->getSite(), PDO::PARAM_STR);
            $sql->bindValue(20, $membre->getEtat_membre(), PDO::PARAM_INT);
            if ($sql->execute()) {
//Entete
                $mail_entete = "MIME-Version: 1.0\r\n";
                $mail_entete .= "From: {$membre->getNom()} "
                        . "<{$membre->getEmail()}>\r\n";
                $mail_entete .= 'Reply-To: ' . $membre->getEmail() . "\r\n";
                $mail_entete .= 'Content-Type: text/plain; charset="iso-8859-1"';
                $mail_entete .= "\r\nContent-Transfer-Encoding: 8bit\r\n";
                $mail_entete .= 'X-Mailer:PHP/' . phpversion() . "\r\n";
//Corp
                $mail_corps = 'Merci de votre confiance. '
                        . 'Veuillez a present suivre ce lien pour valider votre inscription ...';
                $mail_corps .= '\nVotre code d\'activation est ' . $membre->getJeton();
                if (mail($membre->getEmail(), 'Bienvenu dans HelloWAnnonce', $mail_corps, $mail_entete)) {
                    return TRUE;
                } else {
                    return 'echec';
                }
            } else {
                return FALSE;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public static function updateMembre($membre) {
//        var_dump($membre);
        try {
            $sql = DB::connect()->prepare("UPDATE membre SET "
                    . "pseudo = ?, "
                    . "nom = ?, "
                    . "prenom = ?, "
                    . "tel = ?, "
                    . "adresse = ?, "
                    . "profession = ?, "
                    . "date_naissance = ?, "
                    . "photo = ?, "
                    . "facebook = ?, "
                    . "twitter= ?, "
                    . "google = ?, "
                    . "youtube = ?, "
                    . "linkedin = ?, "
                    . "site = ?, "
                    . "etat_membre = ? "
                    . "WHERE id_membre = ?");
            $sql->bindValue(1, $membre->getPseudo(), PDO::PARAM_STR);
            $sql->bindValue(2, $membre->getNom(), PDO::PARAM_STR);
            $sql->bindValue(3, $membre->getPrenom(), PDO::PARAM_STR);
            $sql->bindValue(4, $membre->getTel(), PDO::PARAM_STR);
            $sql->bindValue(5, $membre->getAdresse(), PDO::PARAM_STR);
            $sql->bindValue(6, $membre->getProfession(), PDO::PARAM_STR);
            $sql->bindValue(7, $membre->getDate_naissance());
            $sql->bindValue(8, $membre->getPhoto(), PDO::PARAM_STR);
            $sql->bindValue(9, $membre->getFacebook(), PDO::PARAM_STR);
            $sql->bindValue(10, $membre->getTwitter(), PDO::PARAM_STR);
            $sql->bindValue(11, $membre->getGoogle(), PDO::PARAM_STR);
            $sql->bindValue(12, $membre->getYoutube(), PDO::PARAM_STR);
            $sql->bindValue(13, $membre->getLinkedin(), PDO::PARAM_STR);
            $sql->bindValue(14, $membre->getSite(), PDO::PARAM_STR);
            $sql->bindValue(15, $membre->getEtat_membre(), PDO::PARAM_INT);
            $sql->bindValue(16, $membre->getId_membre(), PDO::PARAM_INT);
            if ($sql->execute())
                return true;
            else
                return false;
        } catch (Exception $e) {
            echo $e;
        }
    }

    public static function getMembreByLoginAngPassword($login, $password) {
        $req = DB::connect()->prepare("select * from membre where pseudo = ? and password = ?");
        $req->bindValue(1, $login, PDO::PARAM_STR);
        $req->bindValue(2, md5(sha1($password, TRUE)), PDO::PARAM_STR);
        $req->execute();
        if ($obj = $req->fetchObject()) {
//            if ($obj->etat_membre == 0) {
//                return 'en_attente';
//            }
            if ($obj->etat_membre == 2) {
                return 'desactiver';
            }
            $obj->monProfil = IProfilImpl::getProfilsById($obj->profil);
            return $obj;
        } else {
            return NULL;
        }
    }

    public static function genererCodeMembre() {
        $req = DB::connect()->query("select max(id_membre) id from membre");
        if ($obj = $req->fetchObject()) {
            $id = $obj->id;
            $code = 'M' . substr('000000', strlen(($id + 1) . ''), strlen('000000')) . ($id + 1) . 'HA';
            return $code;
        } else {
            return NULL;
        }
    }

    public static function getMembreByEmail($email) {
        $req = DB::connect()->prepare("select * from membre where email = ?");
        $req->bindValue(1, $email, PDO::PARAM_STR);
        $req->execute();
        if ($obj = $req->fetchObject()) {
            return $obj;
        } else {
            return NULL;
        }
    }

    public static function getMembreByPseudo($pseudo) {
        $req = DB::connect()->prepare("select * from membre where pseudo = ?");
        $req->bindValue(1, $pseudo, PDO::PARAM_STR);
        $req->execute();
        if ($obj = $req->fetchObject()) {
            return $obj;
        } else {
            return NULL;
        }
    }

    public static function getMembreByMatricule($matricule) {
        $req = DB::connect()->prepare("select * from membre where code = ?");
        $req->bindValue(1, $matricule, PDO::PARAM_STR);
        $req->execute();
        if ($obj = $req->fetchObject()) {
            return $obj;
        } else {
            return NULL;
        }
    }

    public static function changeEtatMembre($etat, $idMembre) {
        try {
            $sql = DB::connect()->prepare("UPDATE membre SET "
                    . "etat_membre = ? "
                    . "WHERE id_membre = ?");
            $sql->bindValue(1, $etat, PDO::PARAM_INT);
            $sql->bindValue(2, $idMembre, PDO::PARAM_INT);
            if ($sql->execute())
                return true;
            else
                return false;
        } catch (Exception $e) {
            echo $e;
        }
    }

    public static function valideDmdMembrePro($idMembre, $etat, $profil) {
        echo $idMembre . ' ' . $etat . ' ' . $profil;
        try {
            $sql = DB::connect()->prepare("UPDATE membre SET "
                    . "etat_membre = ?, "
                    . "profil = ? "
                    . "WHERE id_membre = ?");
            $sql->bindValue(1, $etat, PDO::PARAM_INT);
            $sql->bindValue(2, $profil, PDO::PARAM_INT);
            $sql->bindValue(3, $idMembre, PDO::PARAM_INT);
            if ($sql->execute())
                return true;
            else
                return false;
        } catch (Exception $e) {
            echo $e;
        }
    }

}
