/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global year, day, month */

'use strict';
var App = angular.module('courtageApp', [
    'ngRoute',
    'chieffancypants.loadingBar',
    'routeAppControllers'
]);
App.service('fileUploadService', function ($http, $q) {

    this.uploadFileToUrl = function (file, uploadUrl) {
        var fileFormData = new FormData();
        fileFormData.append('file', file);
        var deffered = $q.defer();
        $http.post(uploadUrl, fileFormData, {
            transformRequest: angular.identity,
            headers: {'Content-Type': undefined}
        }).success(function (response) {
            deffered.resolve(response);
        }).error(function (response) {
            deffered.reject(response);
        });
        return deffered.promise;
    };
});
App.directive('demoFileModel', function ($parse) {
    return {
        restrict: 'A',
        link: function (scope, element, attrs) {
            var model = $parse(attrs.demoFileModel),
                    modelSetter = model.assign;
            element.bind('change', function () {
                scope.$apply(function () {
                    modelSetter(scope, element[0].files[0]);
                });
            });
        }
    };
});
App.config(['$routeProvider',
    function ($routeProvider) {
        $routeProvider
                .when('/accueil', {
                    templateUrl: 'partials/defaultContent.php',
                    controller: 'accueilCtrl'
                })
                .when('/accueil/act/:act', {
                    templateUrl: 'partials/defaultContent.php',
                    controller: 'accueilCtrl'
                })
                .when('/membre', {
                    templateUrl: 'partials/membre.php',
                    controller: 'membreCtrl'
                })
                .when('/contact', {
                    templateUrl: 'partials/contact.php',
                    controller: 'contactCtrl'
                })
                .when('/detailAnnonce/:idAnn', {
                    templateUrl: 'partials/annoncesDetail.php',
                    controller: 'detailAnnonceCtrl'
                })
                .when('/detailAnnonce/:idAnn/image/:idImage', {
                    templateUrl: 'partials/annoncesDetail.php',
                    controller: 'detailAnnonceCtrl'
                })
                .when('/connexion', {
                    templateUrl: 'partials/connexion.php',
                    controller: 'connexionCtrl'
                })
                .when('/bienvenu/:idUser', {
                    templateUrl: 'partials/Bienvenu.php',
                    controller: 'bienvenuCtrl'
                })
                .when('/listAnnonce/:idPropri?', {
                    templateUrl: 'partials/ListeAnnonces.php',
                    controller: 'annoncesCtrl'
                })
                .when('/annonce/:rech', {
                    templateUrl: 'partials/annonces.php',
                    controller: 'annoncesCtrl'
                })
                .when('/annoncera', {
                    templateUrl: 'partials/annonces_1.php',
                    controller: 'annoncesCtrl'
                })
                .when('/AnnonceBouBess/:idAnn?', {
                    templateUrl: 'partials/annoncesAM.php',
                    controller: 'annoncesCtrl'
                })
                .when('/AnnonceBouBess/medias/:idAnn', {
                    templateUrl: 'partials/annoncesMedia.php',
                    controller: 'annoncesCtrl'
                })
                .when('/activite/:act/type/:typ', {
                    templateUrl: 'partials/annonces.php',
                    controller: 'annoncesCtrl'
                })
                .when('/activite/:act', {
                    templateUrl: 'partials/annonces.php',
                    controller: 'annoncesCtrl'
                })
                .when('/modifAnnonce/:id', {
                    templateUrl: 'partials/modifAnnonce.php',
                    controller: 'modifAnnonceCtrl'
                })
                .when('/gallerie', {
                    templateUrl: 'partials/gallerie.php',
                    controller: 'annoncesCtrl'
                })
                .when('/promouvoire/:idAnn', {
                    templateUrl: 'partials/promouvoirAnnonce.php',
                    controller: 'promouvoirCtrl'
                })
                .when('/profils/:idUser', {
                    templateUrl: 'partials/gestionProfil.php',
                    controller: 'gestionProfilCtrl'
                })
                .when('/messagesAnn/:idAnn', {
                    templateUrl: 'partials/messagesAnnonce.php',
                    controller: 'messageAnnCtrl'
                })
                .when('/detailMessage/:idMess', {
                    templateUrl: 'partials/detailsMessage.php',
                    controller: 'messageAnnCtrl'
                })
                .when('/suppAnn/:idAnn', {
                    templateUrl: 'partials/messagesAnnonce.php',
                    controller: 'suppAnnCtrl'
                })
                .when('/message/:idUser?', {
                    templateUrl: 'partials/messagesAnnonce.php',
                    controller: 'messageAnnCtrl'
                })
                .when('/newmessage/:idAnn', {
                    templateUrl: 'partials/TestMess.php',
                    controller: 'newmessageCtrl'
                })
                .when('/gesUser', {
                    templateUrl: 'partials/ListeMembres.php',
                    controller: 'userCtrl'
                })
                .when('/newUser', {
                    templateUrl: 'partials/newUser.php',
                    controller: 'newUserCtrl'
                })
                .when('/detailMembre/:idUser', {
                    templateUrl: 'partials/detailMembre.php',
                    controller: 'userCtrl'
                })
                .when('/file', {
                    templateUrl: 'partials/file.php',
                    controller: 'fileCtrl'
                })
                .when('/deconnexion', {
                    templateUrl: 'partials/defaultContent.php',
                    controller: 'deconnexionCtrl'
                })
                .when('/demmande', {
                    templateUrl: 'partials/affichage.php',
                    controller: 'affichageCtrl'
                })
                .when('/detailDemandeOA/:idDuree', {
                    templateUrl: 'partials/detailDemandeOA.php',
                    controller: 'affichageCtrl'
                })
                .otherwise({
                    redirectTo: '/accueil'
                });
    }
]);
var routeAppControllers = angular.module('routeAppControllers', []);
routeAppControllers.controller('fileCtrl', ['$scope', '$http', '$routeParams', 'fileUploadService',
    function ($scope, $http, $routeParams, fileUploadService) {
        $scope.uploadFile = function () {
            var file = $scope.myFile;
            var uploadUrl = "controlleur/fileCtrl.php",
                    promise = fileUploadService.uploadFileToUrl(file, uploadUrl);
            promise.then(function (response) {
                $scope.serverResponse = response;
            }, function () {
                $scope.serverResponse = 'Erreur de chragement';
            });
        };
    }
]);
routeAppControllers.controller('newmessageCtrl', ['$scope', '$http', '$routeParams',
    function ($scope, $http, $routeParams) {
        $scope.idAnnonce = $routeParams.idAnn;
        $http.get('controlleur/annonceCtrl.php?idann=' + $scope.idAnnonce).success(function (data) {
            $scope.annonce = data;
        });
        $scope.saveMessage = function () {
            $http.post('controlleur/SaveMessageCtrl.php', {
                'nom': $scope.nom,
                'email': $scope.email,
                'objet': $scope.objet,
                'id_destinataire': $scope.annonce.Proprietaire.id_membre,
                'id_annonce': $scope.annonce.id_annonce,
                'contenu': $scope.contenu,
                'etat': 1
            }).success(function (donnee) {
                if (donnee != 'false') {
                    $scope.msg = "Message envoyer avec succee !!!";
                    $scope.result = donnee;
                    $scope.erreur = "";
                } else {
                    $scope.msg = "";
                    $scope.erreur = 'Veuillez remplire tout les champs obligatoire (*) en respectant le format convenu';
                }
            }
            ).error(function () {
                $scope.erreur = "Echec de l'enregistrement";
            });
        };
        $scope.savePlainte = function () {
            $http.post('controlleur/SaveMessageCtrl.php', {
                'nom': $scope.plainte.nom,
                'email': $scope.plainte.email,
                'objet': $scope.plainte.objet,
                'id_destinataire': $scope.annonce.Proprietaire.id_membre,
                'id_annonce': $scope.annonce.id_annonce,
                'contenu': $scope.plainte.message,
                'etat': 2
            }).success(function (donnee) {
                alert(donnee);
                if (donnee != 'false') {
                    $scope.msg = "Message envoyer avec succee !!!";
                    $scope.result = donnee;
                    $scope.erreur = "";
                } else {
                    $scope.msg = "";
                    $scope.erreur = 'Veuillez remplire tout les champs obligatoire (*)';
                }
            }
            ).error(function () {
                $scope.erreur = "Echec de l'enregistrement";
                $scope.msg = "";
            });
        };

    }
]);
routeAppControllers.controller('promouvoirCtrl', ['$scope', '$http', '$routeParams',
    function ($scope, $http, $routeParams) {
        $scope.idAnnonce = $routeParams.idAnn;
        $http.get('controlleur/AnnonceCtrl.php?idann=' + $scope.idAnnonce).success(function (data) {
            $scope.annonce = data;
        });
        $http.get('controlleur/PromouvoirCtrl.php').success(function (data) {
            $scope.listAffichage = data;
        });
        $scope.getAffById = function (id) {
            $http.get('controlleur/PromouvoirCtrl.php?idAff=' + id).success(function (data) {
                $scope.affichage = data;
            });
        };
        $scope.promouvoire = function () {
            $http.post('controlleur/DmdPromotionCtrl.php', {
                'idAnn': $routeParams.idAnn,
                'zone': $scope.zoneAff,
                'datedeb': $scope.datedeb,
                'datefin': $scope.datefin
            }).success(function (donnee) {
                if (donnee != 'false') {
                    if (donnee != 'date invalid') {
                        $scope.msg = "Votre requete a ete bien prise en compte et sera traiter dans les plus bref delai inchaAllah!!!";
                        $scope.result = donnee;
                        $scope.erreur = "";
                    } else {
                        $scope.msg = "";
                        $scope.erreur = 'Veuillez choisir une intervale de date valide';
                    }
                } else {
                    $scope.msg = "";
                    $scope.erreur = 'Veuillez remplire tout les champs obligatoire (*)! ';
                }
            }).error(function () {
                $scope.msg = "";
                $scope.erreur = "Echec de l'operation";
            });
        };
    }
]);
routeAppControllers.controller('suppAnnCtrl', ['$scope', '$http', '$routeParams',
    function ($scope, $http, $routeParams) {
        $scope.idAnnonce = $routeParams.idAnn;
        $http.get('controlleur/SuppAnnCtrl.php?idann=' + $scope.idAnnonce).success(function (data, status) {
            alert('Annonce supprimer avec succee');
            window.location.reload();
        });
    }
]);
routeAppControllers.controller('newUserCtrl', ['$scope', '$http', '$routeParams', 'fileUploadService',
    function ($scope, $http, $routeParams, fileUploadService) {
        $scope.new_photo = "";
        $scope.msg = "";
        $scope.erreur = "";
        $scope.uploadFile = function () {
            var file = $scope.imgprofil;
            var uploadUrl = "controlleur/fileCtrl.php",
                    promise = fileUploadService.uploadFileToUrl(file, uploadUrl);
            promise.then(function (response) {
                if (response != 'false') {
                    $scope.new_photo = response;
                    $scope.erreur = "";
                } else {
                    $scope.erreur = "veuillez selectionner le fichier a transfere dabord!";
                    $scope.msg = "";
                }
            }, function () {
                $scope.serverResponse = 'Erreur de chargement';
            });
        };
        $http.get('controlleur/ProfilsCtrl.php').success(function (data, status) {
            $scope.listProfils = data;
        });
        $scope.saveUser = function () {
            if ($scope.user.mdp !== $scope.user.confmdp) {
                $scope.erreur = 'Le mot de passe et la confirmation ne sont identique';
                $scope.msg = "";
            } else {
                $http.post('controlleur/MembreCtrl.php', {
                    'profil': $scope.user.select_profil,
                    'photo': $scope.new_photo,
                    'pseudo': $scope.user.pseudo,
                    'email': $scope.user.email,
                    'password': $scope.user.mdp,
                    'nom': $scope.user.nom,
                    'prenom': $scope.user.prenom,
                    'adresse': $scope.user.adresse,
                    'datenaiss': $scope.user.datenaiss,
                    'telephone': $scope.user.telephone,
                    'profession': $scope.user.profession,
                    'facebook': $scope.user.facebook,
                    'twitter': $scope.user.twitter,
                    'google': $scope.user.google,
                    'youtube': $scope.user.youtube,
                    'linkedin': $scope.user.linkedin,
                    'site': $scope.user.site,
                    'etat': 0
                }).success(function (donnee) {
                    alert(donnee);
                    if (donnee !== 'false') {
                        if (donnee === '!email') {
                            $scope.msg = "";
                            $scope.erreur = 'Ce email existe dêjà. Veuillez choisir un autre email! Merci!';
                            return;
                        }
                        if (donnee === 'pseudo exist') {
                            $scope.msg = "";
                            $scope.erreur = 'Ce pseudo existe dêjà. Veuillez choisir un autre pseudo! Merci!';
                            return;
                        }
                        if (donnee === '!insert') {
                            $scope.msg = "";
                            $scope.erreur = 'Echec de l\'insertion!';
                            return;
                        }
                        if (donnee === 'ok') {
                            $scope.msg = "Membre enregistrer avec succee !!!";
                            $scope.donnee = donnee;
                            $scope.erreur = "";
                        }
                    } else {
                        $scope.msg = "";
                        $scope.erreur = 'Veuillez remplire tout les champs obligatoire (*) en respectant le format convenu';
                    }
                }
                ).error(function () {
                    $scope.msg = "";
                    $scope.erreur = "Echec de l'enregistrement";
                });
            }
        };
    }
]);
routeAppControllers.controller('affichageCtrl', ['$scope', '$http', '$routeParams',
    function ($scope, $http, $routeParams) {
        $http.get('controlleur/DureeAffichageCtrl.php').success(function (data, status) {
            $scope.listeAnnonces = data;
        });
        $http.get('controlleur/DureeAffichageCtrl.php?idDuree=' + $routeParams.idDuree).success(function (data, status) {
            $scope.duree = data;
        });
        $scope.valider = function () {
            $scope.msg = "";
            $scope.erreur = "";
            $http.post('controlleur/validerDmdCtrl.php', {
                'idDuree': $routeParams.idDuree,
                'etat': 1
            }).success(function (donnee) {
                if (donnee != 'false') {
                    $scope.msg = "La demande a ete valider avec succee!!!";
                    $scope.erreur = "";
                } else {
                    $scope.msg = "";
                    $scope.erreur = 'Echec de l\'operation de validation';
                }
            }).error(function () {
                $scope.msg = "";
                $scope.erreur = 'Echec de l\'operation de validation';
            });
        };
        $scope.bloquer = function () {
            $scope.msg = "";
            $scope.erreur = "";
            $http.post('controlleur/validerDmdCtrl.php', {
                'idDuree': $routeParams.idDuree,
                'etat': 0
            }).success(function (donnee) {
                if (donnee != 'false') {
                    $scope.msg = "La demande a ete bloquer avec succee!!!";
                    $scope.erreur = "";
                } else {
                    $scope.msg = "";
                    $scope.erreur = 'Echec de l\'operation de bloquage';
                }
            }).error(function () {
                $scope.msg = "";
                $scope.erreur = 'Echec de l\'operation de bloquage';
            });
        };
    }
]);
routeAppControllers.controller('deconnexionCtrl', ['$scope', '$http', '$routeParams', '$location',
    function ($scope, $http, $routeParams, $location) {
        $http.post('controlleur/deconnexionCtrl.php', {
        }).success(function (donnee, statut) {
            if (donnee == '1') {
            }
            if (donnee == '0') {
                $location.path('/accueil');
                window.location.reload();
            }
        });
    }
]);
routeAppControllers.controller('userCtrl', ['$scope', '$http', '$routeParams', 'fileUploadService',
    function ($scope, $http, $routeParams, fileUploadService) {
        $http.get('controlleur/LMembreCtrl.php').success(function (data, status) {
            $scope.listMembre = data;
        });
        $http.get('controlleur/ProfilsCtrl.php').success(function (data, status) {
            $scope.listProfils = data;
        });
        $scope.user = '';
        $http.get('controlleur/LMembreCtrl.php?id=' + $routeParams.idUser).success(function (data, status) {
            $scope.user = data;
            $scope.up_id = data.id_membre;
            $scope.up_pseudo = data.pseudo;
            $scope.up_photo = data.photo;
            $scope.up_etat = data.etat_membre;
            $scope.up_select_profil = data.profil;
            $scope.up_matricule = data.code;
            $scope.up_email = data.email;
            $scope.up_nom = data.nom;
            $scope.up_prenom = data.prenom;
            $scope.up_tel = data.tel;
            $scope.up_adresse = data.adresse;
            $scope.up_profession = data.profession;
            $scope.up_date_naiss = data.date_naissance;
            $scope.up_facebook = data.facebook;
            $scope.up_twitter = data.twitter;
            $scope.up_google = data.google;
            $scope.up_youtube = data.youtube;
            $scope.up_linkedin = data.linkedin;
            $scope.up_site = data.site;
        });
        $scope.uploadFile = function () {
            $scope.msg = "";
            $scope.erreur = "";
            var file = $scope.imageProfil;
            var uploadUrl = "controlleur/fileCtrl.php",
                    promise = fileUploadService.uploadFileToUrl(file, uploadUrl);
            promise.then(function (response) {
                if (response != 'false') {
                    $scope.up_photo = response;
                    $scope.erreur = "";
                } else {
                    $scope.erreur = "veuillez selectionner le fichier a transfere dabord!";
                    $scope.msg = "";
                }
            }, function () {
                $scope.serverResponse = 'Erreur de chargement';
            });
        };
        $scope.updateMembre = function () {
            $http.post('controlleur/GestionProfilsCtrl.php', {
                'id_user': $scope.up_id,
                'pseudo': $scope.up_pseudo,
                'photo': $scope.up_photo,
                'etat': $scope.up_etat,
                'profil': $scope.up_select_profil,
                'matricule': $scope.up_matricule,
                'email': $scope.up_email,
                'nom': $scope.up_nom,
                'prenom': $scope.up_prenom,
                'tel': $scope.up_tel,
                'adresse': $scope.up_adresse,
                'profession': $scope.up_profession,
                'date_naiss': $scope.up_date_naiss,
                'facebook': $scope.up_facebook,
                'twitter': $scope.up_twitter,
                'google': $scope.up_google,
                'youtube': $scope.up_youtube,
                'linkedin': $scope.up_linkedin,
                'site': $scope.up_site
            }).success(function (donnee, statut) {
                if (donnee != 'false') {
                    $scope.msg = "Membre modifier avec succee !!!";
                    $scope.erreur = "";
                    window.location.reload();
                } else {
                    $scope.msg = "";
                    $scope.erreur = 'Veuillez remplire tout les champs obligatoire (*) en respectant le format convenu';
                }
            }).error(function () {
                $scope.erreur = "Echec de la modification";
            });
            var file = $scope.imageProfil;
            var uploadUrl = "controlleur/GestionProfilsCtrl.php",
                    promise = fileUploadService.uploadFileToUrl(file, uploadUrl);
            promise.then(function (response) {
                $scope.serverResponse = response;
            }, function () {
                $scope.serverResponse = 'Erreur de chargement';
            });
        };
        $scope.validerDmd = function () {
            $http.post('controlleur/ValiderDmdMProCtrl.php', {
                'user': $scope.user
            }).success(function (donnee) {
                alert(donnee);
                if (donnee != 'false') {
                    $scope.msg = "Membre modifier avec succee !!!";
                    $scope.erreur = "";
                    window.location.reload();
                } else {
                    $scope.msg = "";
                    $scope.erreur = 'Veuillez remplire tout les champs obligatoire (*) en respectant le format convenu';
                }
            }).error(function () {
                $scope.erreur = "Echec de la modification";
            });
            var file = $scope.imageProfil;
            var uploadUrl = "controlleur/GestionProfilsCtrl.php",
                    promise = fileUploadService.uploadFileToUrl(file, uploadUrl);
            promise.then(function (response) {
                $scope.serverResponse = response;
            }, function () {
                $scope.serverResponse = 'Erreur de chargement';
            });

        };
    }
]);
routeAppControllers.controller('messageAnnCtrl', ['$scope', '$http', '$routeParams',
    function ($scope, $http, $routeParams) {
        $scope.idAnnonce = $routeParams.idAnn;
        $scope.idMessage = $routeParams.idMess;
        $scope.idMembre = $routeParams.idUser;
        $http.get('controlleur/MessageCtrl.php?idann=' + $scope.idAnnonce).success(function (data, status) {
            $scope.listMessage = data;
        });
        $http.get('controlleur/MessageCtrl.php?iduser=' + $scope.idMembre).success(function (data, status) {
            $scope.listMessage = data;
        });
        $http.get('controlleur/MessageCtrl.php?idmess=' + $scope.idMessage).success(function (data) {
            $scope.message = data;
        });
        $http.get('controlleur/TypeMessageCtrl.php').success(function (data) {
            $scope.listTypeMess = data;
        });
    }
]);
routeAppControllers.controller('gestionProfilCtrl', ['$scope', '$http', '$routeParams', 'fileUploadService',
    function ($scope, $http, $routeParams, fileUploadService) {
        $scope.id = $routeParams.idUser;
        $scope.tof = "";
        $http.get('controlleur/LMembreCtrl.php?id=' + $scope.id).success(function (data) {
            $scope.pseudo = data.pseudo;
            $scope.email = data.email;
            $scope.nom = data.nom;
            $scope.prenom = data.prenom;
            $scope.adresse = data.adresse;
            $scope.datenaiss = data.date_naissance;
            $scope.telephone = data.tel;
            $scope.profession = data.profession;
            $scope.facebook = data.facebook;
            $scope.twitter = data.twitter;
            $scope.google = data.google;
            $scope.youtube = data.youtube;
            $scope.linkedin = data.linkedin;
            $scope.site = data.site;
            $scope.tof = data.photo;
        });

        $scope.uploadFile = function () {
            $scope.msg = '';
            $scope.erreur = '';
            var file = $scope.imgprofil;
            var uploadUrl = "controlleur/fileCtrl.php",
                    promise = fileUploadService.uploadFileToUrl(file, uploadUrl);
            promise.then(function (response) {
                if (response != 'false') {
                    $scope.tof = response;
                    $scope.msg = 'Image charge! veuillez a present l\'enregistrer';
                    $scope.erreur = '';
                } else {
                    $scope.msg = '';
                    $scope.erreur = 'Veuiller selectioner le fichier a uploader';
                }
            }, function () {
                $scope.msg = '';
                $scope.erreur = 'Erreur de chargement du fichier!';
            });
        };

        $scope.soumettre = function () {
            $http.post('controlleur/GestionProfilsCtrl.php', {
                'id_user': $scope.id,
                'email': $scope.email,
                'pseudo': $scope.pseudo,
                'nom': $scope.nom,
                'prenom': $scope.prenom,
                'tel': $scope.telephone,
                'adresse': $scope.adresse,
                'profession': $scope.profession,
                'date_naiss': $scope.datenaiss,
                'facebook': $scope.facebook,
                'youtube': $scope.youtube,
                'twitter': $scope.twitter,
                'linkedin': $scope.linkedin,
                'google': $scope.google,
                'site': $scope.site,
                'photo': $scope.tof
            }).success(function (donnee, statut) {
                if (donnee != 'false') {
                    $scope.msg = "votre profil a ete modifier avec succee !!! Les modification prandrons effet a votre prochaine session! Merci";
                    $scope.erreur = "";
                } else {
                    $scope.msg = "";
                    $scope.erreur = 'Veuillez remplire tout les champs obligatoire (*)';
                }
            }).error(function () {
                $scope.erreur = "Echec de la mise a jour";
                $scope.msg = "";
            });
        };
    }
]);
//Accueil Controller
routeAppControllers.controller('accueilCtrl', ['$scope', '$http', '$routeParams',
    function ($scope, $http, $routeParam, connexionCtrl) {
        $scope.isok = true;
        $http.get('controlleur/AnnonceCtrl.php').success(function (data) {
            $scope.listeAnnonces = data;
        });
    }
]);
routeAppControllers.controller('modifAnnonceCtrl', ['$scope', '$http', '$routeParams',
    function ($scope, $http, $routeParam, connexionCtrl) {
        $scope.idAnnonce = $routeParam.id;
        $http.get('controlleur/ActiviteCtrl.php').success(function (data) {
            $scope.listActivite = data;
        });
        $http.get('controlleur/TypeAnnonceCtrl.php').success(function (data) {
            $scope.listTypeAnnonce = data;
        });
        $http.get('controlleur/LocaliteCtrl.php').success(function (data) {
            $scope.listLocalite = data;
        });
        $http.get('controlleur/RegionCtrl.php').success(function (data) {
            $scope.listRegion = data;
        });
        $http.get('controlleur/AnnonceCtrl.php?idann=' + $scope.idAnnonce).success(function (data, status) {
            $scope.Annonces = data;
            $scope.selected_activite = data.typeAnnonce.id_activite;
            $scope.selected_typeannonce = data.typeAnnonce.id_type_annonce;
            $scope.selected_localite = data.id_localite;
            $scope.selected_transaction = data.transaction;
            $scope.reference = data.reference;
            $scope.adresse = data.adresse;
            $scope.libelle = data.libelle;
            $scope.montant = data.montant;
            $scope.description = data.description;
        });
        $scope.updateAnnonce = function () {

        };
    }
]);
routeAppControllers.controller('messageModalCtrl', ['$scope',
    function ($scope, modals) {
        $scope.showMessageForm = function () {
        };
    }
]);
routeAppControllers.controller('contactCtrl', ['$scope', '$routeParams', '$http',
    function ($scope, $routeParam, $http) {
        $scope.nom = "";
        $scope.email = "";
        $scope.objet = "";
        $scope.message = "";
        $scope.envoyer = function () {
            $scope.msg = '';
            $scope.erreur = '';
            $http.post('controlleur/ContactCtrl.php', {
                'contact': $scope.contact
            }).success(function (donnee) {
                if (donnee != 'false') {
                    $scope.msg = "Message envoyer avec succee !!!";
                    $scope.erreur = "";
                    $scope.viderChamps();
                } else {
                    $scope.msg = "";
                    $scope.erreur = 'Veuillez remplire tout les champs obligatoire (*)';
                }
            }).error(function () {
                $scope.msg = "";
                $scope.erreur = 'Erreur survenu lors de l\'envoi de message';
            });
        };
        $scope.viderChamps = function () {

        };
    }
]);
routeAppControllers.controller('annoncesCtrl', ['$scope', '$http', '$routeParams', '$location', 'fileUploadService',
    function ($scope, $http, $routeParam, $location, fileUploadService) {
        $scope.statut = "active what the wrong";
        $scope.idAct = $routeParam.act;
        $scope.idtyp = $routeParam.typ;
        $scope.rech = $routeParam.rech;
        $scope.idProprietaire = $routeParam.idPropri;
        $scope.idAnnonce = $routeParam.idAnn;
        $scope.msgTest = 'Test si ok';
        $http.get('controlleur/AnnonceCtrl.php?activite=' + $scope.idAct + '&typeAnn=' + $scope.idtyp + '&rech=' + $scope.rech + '&propri=' + $scope.idProprietaire + '&idann=' + $scope.idAnnonce)
                .success(function (data, status) {
                    $scope.listeAnnonces = data;
                    $scope.selected_activite = data.typeAnnonce.id_activite;
                    $scope.selected_typeannonce = data.typeAnnonce.id_type_annonce;
                    $scope.selected_localite = data.id_localite;
                    $scope.selected_transaction = data.transaction;
                    $scope.reference = data.reference;
                    $scope.adresse = data.adresse;
                    $scope.libelle = data.libelle;
                    $scope.montant = data.montant;
                    $scope.description = data.description;
                });
        $scope.recherche = function () {
            alert($scope.rech);
        };
        $http.get('controlleur/ActiviteCtrl.php').success(function (data) {
            $scope.listActivite = data;
        });
        $http.get('controlleur/TypeAnnonceCtrl.php').success(function (data) {
            $scope.listTypeAnnonce = data;
        });
        $http.get('controlleur/LocaliteCtrl.php').success(function (data) {
            $scope.listLocalite = data;
        });
        $http.get('controlleur/RegionCtrl.php').success(function (data) {
            $scope.listRegion = data;
        });
        $http.get('controlleur/PaysCtrl.php').success(function (data) {
            $scope.listPays = data;
        });
        $scope.saveAnnonce = function () {
            $scope.msg = '';
            $scope.erreur = '';
            $http.post('controlleur/SaveAnnonceCtrl.php', {
                'matricule': $scope.matricule,
                'activite': $scope.selected_activite,
                'typeannonce': $scope.selected_typeannonce,
                'localite': $scope.selected_localite,
                'transaction': $scope.selected_transaction,
                'adresse': $scope.adresse,
                'libelle': $scope.libelle,
                'montant': $scope.montant,
                'description': $scope.description
            }).success(function (donnee, statut) {
                if (donnee != 'false') {
                    if (donnee === '!Matricule') {
                        $scope.erreur = "Matricule incorrect";
                        $scope.msg = "";
                    } else {
                        $scope.msg = "Annonce enregistrer avec succee !!!";
                        $scope.erreur = "";
                        $location.path('/AnnonceBouBess/medias/' + donnee);
                    }
                } else {
                    $scope.msg = "";
                    $scope.erreur = 'Veuillez remplire tout les champs obligatoire (*) en respectant le format convenu';
                }
            }).error(function () {
                $scope.erreur = "Echec de l'enregistrement";
                $scope.msg = "";
            });
        };
        $scope.tof1 = "";
        $scope.desc1 = "";
        $scope.valid = false;
        $scope.uploadFile1 = function () {
            $scope.msg = '';
            $scope.erreur = '';
            var file = $scope.myFile1;
            var uploadUrl = "controlleur/fileCtrl.php",
                    promise = fileUploadService.uploadFileToUrl(file, uploadUrl);
            promise.then(function (response) {
                $scope.tof1 = response;
                $scope.desc1 = $scope.descImage1;
                $scope.valid = true;
                $scope.msg = 'Image charge! veuillez a present l\'enregistrer';
                $scope.erreur = '';
            }, function () {
                $scope.msg = '';
                $scope.erreur = 'Veuiller selectioner le fichier a uploader';
            });
        };
        $scope.saveMedias = function () {
            $scope.msg = '';
            $scope.erreur = '';
            $http.post('controlleur/MediaCtrl.php', {
                'id_ann': $routeParam.idAnn,
                'tof': $scope.tof1,
                'desc': $scope.desc1
            }).success(function (donnee) {
                if (donnee != 'false') {
                    if (donnee != '!limit') {
                        $scope.msg = "image enregistrer avec succee !!!";
                        $scope.erreur = "";
                        $scope.valid = false;
                        $scope.viderChampsMedia();
                        window.refresh();
                    } else {
                        $scope.msg = "";
                        $scope.erreur = "Vous avez atteint la limite, vous ne pouver pas avoir plus de 4 images par annonce";
                        $scope.valid = false;
                        $scope.viderChampsMedia();
                        window.refresh();
                    }
                } else {
                    $scope.msg = "";
                    $scope.valid = false;
                    $scope.erreur = 'Veuillez remplire tout les champs obligatoire (*)';
                }
            }).error(function () {

            });
        };
        $scope.viderChampsMedia = function () {
            $scope.myFile1 = "";
            $scope.descImage1 = "";
            $scope.tof1 = "";
        };
        $scope.viderChamps = function () {
            $scope.selected_activite = "";
            $scope.selected_typeannonce = "";
            $scope.selected_localite = "";
            $scope.selected_transaction = "";
            $scope.adresse = "";
            $scope.libelle = "";
            $scope.montant = "";
            $scope.description = "";
        };
    }
]);
routeAppControllers.controller('detailAnnonceCtrl', ['$scope', '$http', '$routeParams', 'fileUploadService',
    function ($scope, $http, $routeParams, fileUploadService) {
        $scope.idAnnonce = $routeParams.idAnn;
        $scope.idMedia = $routeParams.idImage;
        $http.get('controlleur/DetailAnnonceCtrl.php?id=' + $scope.idAnnonce).success(function (data, status) {
            $scope.annonce = data;
            $scope.destinataire = $scope.annonce.Proprietaire.id_membre;
            $scope.id_annonce = $scope.idAnnonce;
        });
        $http.get('controlleur/DureeAffichageCtrl.php?idAnn=' + $scope.idAnnonce).success(function (data, status) {
            $scope.dureeAffichages = data;
        });
        $http.get('controlleur/LMediaCtrl.php?idMedia=' + $scope.idMedia).success(function (data, status) {
            $scope.imageAnn = data;
            $scope.updescImage = data.description;
        });
        $http.get('controlleur/ActiviteCtrl.php').success(function (data) {
            $scope.listActivite = data;
        });
        $http.get('controlleur/TypeAnnonceCtrl.php').success(function (data) {
            $scope.listTypeAnnonce = data;
        });
        $http.get('controlleur/LocaliteCtrl.php').success(function (data) {
            $scope.listLocalite = data;
        });
        $http.get('controlleur/RegionCtrl.php').success(function (data) {
            $scope.listRegion = data;
        });
        $http.get('controlleur/LMembreCtrl.php?idProfil=' + 2).success(function (data) {
            $scope.listCourtier = data;
        });
        $http.get('controlleur/AnnonceCtrl.php?idann=' + $scope.idAnnonce).success(function (data, status) {
            $scope.Annonces = data;
            $scope.selected_activite = data.typeAnnonce.id_activite;
            $scope.selected_typeannonce = data.typeAnnonce.id_type_annonce;
            $scope.selected_localite = data.id_localite;
            $scope.selected_transaction = data.transaction;
            $scope.reference = data.reference;
            $scope.adresse = data.adresse;
            $scope.libelle = data.libelle;
            $scope.montant = data.montant;
            $scope.description = data.description;
        });
        $scope.aff = true;
        $scope.afficher = function () {
            $scope.aff = true;
        };
        $scope.masquer = function () {
            $scope.aff = false;
        };
        $scope.validAnnonce = function () {
            $http.post('controlleur/validAnnCtrl.php', {
                'id_ann': $scope.idAnnonce,
                'id_comm': $scope.selected_id_commerciaux
            }).success(function (donnee) {
                if (donnee !== 'false') {
                    $scope.msg = "Annonce valider avec succee !!!";
                    $scope.erreur = "";
                } else {
                    $scope.msg = "";
                    $scope.erreur = 'Veuillez selectionner le commercial qui doit suivre l\'annonce';
                }
            }).error(function () {
                $scope.erreur = "Echec de la validation";
            });
        };
        $scope.updateAnnonce = function () {
            $http.post('controlleur/UpAnnonceCtrl.php', {
                'id_annonce': $scope.idAnnonce,
                'activite': $scope.selected_activite,
                'typeannonce': $scope.selected_typeannonce,
                'localite': $scope.selected_localite,
                'transaction': $scope.selected_transaction,
                'adresse': $scope.adresse,
                'libelle': $scope.libelle,
                'montant': $scope.montant,
                'description': $scope.description
            }).success(function (donnee, statut) {
                if (donnee != 'false') {
                    $scope.msg = "Annonce modifier avec succee !!!";
                    $scope.erreur = "";
                } else {
                    $scope.msg = "";
                    $scope.erreur = 'Veuillez remplire tout les champs obligatoire (*) en respectant le format convenu';
                }
            }).error(function () {
                $scope.erreur = "Echec de l'enregistrement"
            });
        };
        $scope.formModif = true;
        $scope.modifier = function () {
            $scope.formModif = false;
        };
        $scope.annuler = function () {
            $scope.formModif = true;
        };

        $scope.uptof = '';
        $scope.valid = false;
        $scope.uploadFile = function () {
            $scope.msg = '';
            $scope.erreur = '';
            var file = $scope.myFile1;
            var uploadUrl = "controlleur/fileCtrl.php",
                    promise = fileUploadService.uploadFileToUrl(file, uploadUrl);
            promise.then(function (response) {
                if (response !== 'false') {
                    $scope.uptof = response;
                    $scope.desc1 = $scope.descImage1;
                    $scope.valid = true;
                    $scope.msg = 'Image charge! veuillez a present l\'enregistrer';
                    $scope.erreur = '';
                } else {
                    $scope.valid = false;
                    $scope.msg = '';
                    $scope.erreur = 'Veuillez selectionner l\'image a uploader';
                }
            }, function () {
                $scope.msg = '';
                $scope.erreur = 'Erreur de chargement!!!';
            });
        };
        $scope.upMedia = function () {
            $scope.msg = '';
            $scope.erreur = '';
            $http.post('controlleur/UpMediaCtrl.php', {
                'id_ann': $routeParams.idAnn,
                'id_media': $routeParams.idImage,
                'tof': $scope.uptof,
                'desc': $scope.updescImage
            }).success(function (donnee) {
//                alert(donnee);
                if (donnee != 'false') {
                    $scope.msg = "image modifier avec succee !!!";
                    $scope.erreur = "";
                    $scope.valid = false;
                    window.location.reload();
                } else {
                    $scope.msg = "";
                    $scope.valid = false;
                    $scope.erreur = 'Veuillez remplire tout les champs obligatoire (*)';
                }
            }).error(function () {
                $scope.msg = "";
                $scope.valid = false;
                $scope.erreur = 'Echec !!!';
            });
        };

        $scope.tof1 = "";
        $scope.desc1 = "";
        $scope.uploadFile1 = function () {
            $scope.msg = '';
            $scope.erreur = '';
            var file = $scope.myFile1;
            var uploadUrl = "controlleur/fileCtrl.php",
                    promise = fileUploadService.uploadFileToUrl(file, uploadUrl);
            promise.then(function (response) {
                if (response !== 'false') {
                    $scope.tof1 = response;
                    $scope.desc1 = $scope.descImage1;
                    $scope.valid = true;
                    $scope.msg = 'Image charge! veuillez a present l\'enregistrer';
                    $scope.erreur = '';
                } else {
                    $scope.valid = false;
                    $scope.msg = '';
                    $scope.erreur = 'Veuillez selectionner l\'image a uploader';
                }
            }, function () {
                $scope.msg = '';
                $scope.erreur = 'Veuiller selectioner le fichier a uploader!';
            });
        };
        $scope.saveComment = function () {
            $scope.msg = '';
            $scope.erreur = '';
            $http.post('controlleur/CommentaireCtrl.php', {
                'id_ann': $routeParams.idAnn,
                'commentaire': $scope.commentaire
            }).success(function (donnee) {
                if (donnee != 'false') {
                    $scope.msg = "commentaire enregistrer avec succee !!!";
                    $scope.erreur = "";
                    window.location.reload();
                } else {
                    $scope.msg = "";
                    $scope.erreur = 'Veuillez remplire tout les champs obligatoire (*)';
                }
            }).error(function () {
                $scope.msg = "";
                $scope.erreur = 'Echec !!!';
            });
        };
    }
]);
routeAppControllers.controller('becomeMPro', ['$scope', '$http', '$routeParams',
    function ($scope, $http, $routeParams) {
        $scope.validerDmdMpro = function () {
            $scope.msg = '';
            $scope.erreur = '';
            $http.post('controlleur/DevenirMproCtrl.php', {
                'etatMembre': 3
            }).success(function (donnee) {
                if (donnee != 'false') {
                    $scope.msg = "Demande effectuer avec succee. Ceci va etre traiter dans les meilleur delais inchaAllah !!!";
                    $scope.erreur = "";
//                    window.location.reload();
                } else {
                    $scope.msg = "";
                    $scope.erreur = 'Veuillez remplire tout les champs obligatoire (*)';
                }
            }).error(function () {
                $scope.msg = "";
                $scope.erreur = 'Echec !!!';
            });
        };
    }
]);
routeAppControllers.controller('activiteCtrl', ['$scope', '$http', '$routeParams',
    function ($scope, $http, $routeParams) {
        $http.get('controlleur/ActiviteCtrl.php').success(function (data, status) {
            $scope.listActivite = data;
        });
        $http.get('controlleur/TypeAnnonceCtrl.php').success(function (data, status) {
            $scope.listTypeAnnonce = data;
        });
    }
]);
routeAppControllers.controller('pageAccueilCtrl', ['$scope', '$http',
    function ($scope, $http) {
        $scope.affichage = "Accueil";
        $http.get('controlleur/affichageCtrl.php?affichage=' + $scope.affichage).success(function (data) {
            $scope.listDuree = data;
        });
    }
]);
routeAppControllers.controller('slideCtrl', ['$scope', '$http',
    function ($scope, $http) {
        $scope.affichage = "Slider";
        $http.get('controlleur/affichageCtrl.php?affichage=' + $scope.affichage).success(function (data) {
            $scope.listDuree = data;
        });
    }
]);
routeAppControllers.controller('recommendationCtrl', ['$scope', '$http',
    function ($scope, $http) {
        $scope.affichage = "Recommandation";
        $scope.activite = 1;
        $http.get('controlleur/affichageCtrl.php?affichage=' + $scope.affichage + '&act=' + $scope.activite).success(function (data) {
            $scope.listDuree = data;
        });
    }
]);
routeAppControllers.controller('annonceProCtrl', ['$scope', '$http', '$routeParams',
    function ($scope, $http, $routeParams) {
        $scope.affichage = "Annonce pro";
        $scope.activite = $routeParams.act;
        $http.get('controlleur/AnnonceProCtrl.php?affichage=' + $scope.affichage + '&act=' + $scope.activite)
                .success(function (data) {
                    $scope.listDureeAPro = data;
                });
    }
]);
routeAppControllers.controller('localiteCtrl', ['$scope', '$http', '$routeParams',
    function ($scope, $http, $routeParams) {
        $http.get('controlleur/LocaliteCtrl.php').success(function (data) {
            $scope.listLocalite = data;
        });
    }
]);
routeAppControllers.controller('membreCtrl', ['$scope', '$http', '$routeParams',
    function ($scope, $http, $routeParam) {
        $scope.msg = '';
        $scope.erreur = '';
        $scope.saveMember = function () {
            if ($scope.password !== $scope.confirmpass) {
                $scope.erreur = 'Le mot de passe et la confirmation ne sont pas identiques';
                $scope.msg = "";
            } else {
                $http.post('controlleur/MembreCtrl.php', {
                    'profil': 1,
                    'email': $scope.email,
                    'pseudo': $scope.pseudo,
                    'password': $scope.password
                }).success(function (donnee, statut) {
                    if (donnee !== 'false') {
                        if (donnee === '!email') {
                            $scope.msg = "";
                            $scope.erreur = 'Ce email existe dêjà. Veuillez choisir un autre email! Merci!';
                            return;
                        }
                        if (donnee === 'pseudo exist') {
                            $scope.msg = "";
                            $scope.erreur = 'Ce pseudo existe dêjà. Veuillez choisir un autre pseudo! Merci!';
                            return;
                        }
                        if (donnee === '!confirmation') {
                            $scope.msg = "";
                            $scope.erreur = 'Ce confirmation existe dêjà. Veuillez choisir un autre confirmation! Merci!';
                            return;
                        }
                        if (donnee === '!insert') {
                            $scope.msg = "";
                            $scope.erreur = 'Echec de l\'insertion!';
                            return;
                        }
//                        if (donnee === 'ok') {
                        $scope.msg = "Membre enregistrer avec succee !!!";
                        $scope.donnee = donnee;
                        $scope.erreur = "";
                        $scope.viderChamps();
//                    }
                    } else {
                        $scope.msg = "";
                        $scope.erreur = 'Veuillez remplire tout les champs obligatoire';
                    }
                }).error(function () {
                    $scope.msg = "";
                    $scope.erreur = "Echec de l'enregistrement";
                });
            }
        };
        $scope.viderChamps = function () {
            $scope.email = "";
            $scope.pseudo = "";
            $scope.password = "";
            $scope.confirmpass = "";
        };
    }
]);
App.service('Session', function ($scope) {
    var session_user = '';
});
routeAppControllers.controller('connexionCtrl', ['$scope', '$http', '$location',
    function ($scope, $http, $location) {
        $scope.msg = '';
        $scope.erreur = "";
        $scope.verifLogin = function () {
            $http.post('controlleur/ConnexionCtrl.php', {
                'log': $scope.login,
                'pass': $scope.mdp
            }).success(function (data) {
                alert('En phase test!\n ' + data);
                if (data === 'LogError') {
                    $scope.erreur = "Login ou mot de passe incorrect !!!";
                    $scope.msg = "";
                }
//                 else if (data === 'false') {
//                    $scope.erreur = "Veuillez saisir le login et le mot de passe !!!";
//                    $scope.msg = "";
//                } 
//                else if (data === 'en_attente') {
//                    $scope.erreur = "Votre compte est entente de validation... !!!";
//                    $scope.msg = "";
//                } 
                else if (data === 'desactiver') {
                    $scope.erreur = "Votre compte est desactive, veuiller contacer l'administration pour plus d'informations !!!";
                    $scope.msg = "";
                } else {
                    $scope.userConnected = data;
                    $scope.msg = 'Connexion etablie avec succee !!!';
                    $scope.erreur = "";
//                    $scope.viderChamps();
                    $location.path('/bienvenu/' + $scope.userConnected.id_membre);
                    window.location.reload();
                }
            }).error(function () {
                $scope.erreur = "Echec de la connexion !!!";
                $scope.msg = "";
            });
        };
        $scope.viderChamps = function () {
            $scope.login = "";
            $scope.mdp = "";
        };
    }
]);
routeAppControllers.controller('saveAnnoncesCtrl', ['$scope', '$http', '$routeParam',
    function ($scope, $http, $routeParam) {
        $scope.msg = '';
        $scope.erreur = '';
        $http.get('controlleur/ActiviteCtrl.php').success(function (data) {
            $scope.listActivite = data;
        });
        $http.get('controlleur/TypeAnnonceCtrl.php').success(function (data) {
            $scope.listTypeAnnonce = data;
        });
        $scope.idAnnonce = $routeParam.idAnn;
        $scope.listAnnonces = "";
        $http.get('controlleur/AnnonceCtrl.php?idann=' + $scope.idAnnonce).success(function (data) {
            $scope.listAnnonces = data;
            $scope.selected_activite = data.typeAnnonce.id_activite;
            $scope.selected_typeannonce = data.typeAnnonce.id_type_annonce;
            $scope.selected_localite = data.id_localite;
            $scope.selected_transaction = data.transaction;
            $scope.reference = data.reference;
            $scope.adresse = data.adresse;
            $scope.libelle = data.libelle;
            $scope.montant = data.montant;
            $scope.description = data.description;
        });
        $scope.saveAnnonce = function () {
            $scope.msg = "";
            $scope.erreur = "";
            $http.post('controlleur/SaveAnnonceCtrl.php', {
                'activite': $scope.selected_activite,
                'typeannonce': $scope.selected_typeannonce,
                'localite': $scope.selected_localite,
                'transaction': $scope.selected_transaction,
                'tof': $scope.tof,
                'reference': $scope.reference,
                'adresse': $scope.adresse,
                'libelle': $scope.libelle,
                'montant': $scope.montant,
                'description': $scope.description,
            }).success(function (donnee, statut) {
                if (donnee != 'false') {
//                alert(donnee);
                    $scope.msg = "Annonce enregistrer avec succee !!!";
                    $scope.donnee = donnee;
                    $scope.erreur = "";
//                    $scope.viderChamps();
                } else {
                    $scope.msg = "";
                    $scope.erreur = 'Veuillez remplire tout les champs obligatoire (*)';
                }
            }).error(function () {
                $scope.erreur = "Echec de l'enregistrement"
            });
        };
    }
]);
