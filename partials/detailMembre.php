<?php
include_once '../services/Session.php';
Session::initSession();
?>

<div class="col-sm-9">
    <!--{{user}}-->
    <h2 class="title text-center">Details membre</h2>   
    <div class="blog-post-area">
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        Info
                        <span ng-switch="user.etat_membre" class="pull-right">
                            <span ng-switch-when="0">
                                <i class="fa fa-certificate text-warning"></i>&nbsp;
                                En attentes
                            </span>
                            <span ng-switch-when="1">
                                <i class="fa fa-certificate text-success"></i>&nbsp;
                                Activer
                            </span>
                            <span ng-switch-when="3">
                                <i class="fa fa-certificate text-info"></i>&nbsp;
                                Demande membre pro
                            </span>
                            <span ng-switch-when="2">
                                <i class="fa fa-certificate text-danger"></i>&nbsp;
                                Desactiver
                            </span>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="single-blog-post">
                            <img src="web/images/courtage/{{user.photo}}" class="thumbnail img-responsive" style="height: 235px; width: 100%;">
                            <div class="post-meta" style="margin-bottom: 0px">
                                <ul>
                                    <li class="form-group">
                                        <i class="fa fa-user"></i>
                                        {{user.pseudo}}
                                    </li>
                                    <li class="form-group">
                                        <i class="fa fa-star"></i>
                                        {{user.monProfil.libelle}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-6">
                                <button data-toggle="modal" data-target="#UpMembre" class="btn btn-primary form-control rounded">
                                    <i class="fa fa-edit"></i>&nbsp;Modifier
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <button data-toggle="modal" data-target="#ListAnnonces" class="btn btn-primary form-control rounded">
                                    <i class="fa fa-list"></i>&nbsp;Annonces
                                </button>
                            </div>
                        </div>
                        <div class="row" ng-if="user.etat_membre == 3 && user.profil == 1">
                            <div class="col-sm-12">
                                <button data-toggle="modal" data-target="#UpMembre" class="btn btn-primary form-control rounded">
                                    <i class="fa fa-check"></i>&nbsp;Valider demande Pro
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button data-toggle="modal" data-target="#ActivMembre" class="btn btn-primary form-control rounded">
                                    <i class="fa fa-check"></i>&nbsp;Activer Membre
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="ListAnnonces" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">                                
                        <div class="modal-header get" style="margin-top: 0px">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h1 class="modal-title text-center" id="myModalLabel">
                                <i class="fa fa-list-alt"></i>&nbsp;
                                Liste Annonces
                            </h1>
                        </div>
                        <div class="modal-body">
                            <table class="table table-hover text-center" style="">
                                <thead>
                                    <tr class="cart_menu get">
                                        <th class="text-center">Photo</th>
                                        <th class="text-center">Reference</th>
                                        <th class="text-center">Libelle</th>
                                        <th class="text-center">Date creation</th>
                                        <th class="text-center">Etat</th>
                                        <!--<th class="text-center">Option</th>-->
                                    </tr>
                                </thead>
                                <!--{{listeAnnonces}}-->
                                <tbody>
                                    <!--ng-if="obj.etat_annonce != 3 && obj.etat_annonce != 0"-->
                                    <tr ng-repeat="obj in user.listAnnonces" ng-if="obj.etat_annonce != 3 && (obj.etat_annonce === select_etat || select_etat == null || select_etat == -1)">
                                        <td class="">
                                            <img class="img-responsive" style="height: 50px; width: 50px" src="web/images/courtage/{{obj.listMedia[0].fichier}}" alt="">
                                        </td>
                                        <td>
                                            {{obj.reference}}
                                        </td>
                                        <td class="">
                                            <p>{{obj.libelle}}</p>
                                        </td>
                                        <td class="">
                                            {{obj.date_creation}}
                                        </td>
                                        <td class="">
                                            <span ng-switch="obj.etat_annonce">
                                                <span ng-switch-when="0">
                                                    <i class="fa fa-certificate text-warning"></i>
                                                </span>
                                                <span ng-switch-when="1">
                                                    <i class="fa fa-certificate text-success"></i>
                                                </span>
                                                <span ng-switch-when="2">
                                                    <i class="fa fa-certificate text-danger"></i>
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="UpMembre" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">                                
                        <div class="modal-header get" style="margin-top: 0px">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h1 class="modal-title text-center" id="myModalLabel">
                                <i class="fa fa-edit"></i>&nbsp;
                                Valider Demande Membre Pro
                            </h1>
                        </div>
                        <form role='form'>
                            <div class="modal-body">
                                Etes vous sure de vouloire valider ce demande de membre pro?
                                Si vous valider cette demande, cela suppose que tout les tratement hors system ont ete deja faites!
                            </div>
                            <div class="modal-footer get" style="margin-top: 0px;padding-bottom: 0px;">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <button type="submit" ng-click="validerDmd()" class="btn btn-success form-control rounded">
                                                <i class="fa fa-check"></i>&nbsp;Valider
                                            </button>
                                        </div>
                                        <div class="col-sm-6">
                                            <!--class="close" data-dismiss="modal" aria-hidden="true"-->
                                            <button type="button" class="btn btn-danger form-control rounded" >
                                                <i class="fa fa-times"></i>&nbsp;Annuler
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="UpMembre" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">                                
                        <div class="modal-header get" style="margin-top: 0px">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h1 class="modal-title text-center" id="myModalLabel">
                                <i class="fa fa-edit"></i>&nbsp;
                                Modifier membre
                            </h1>
                        </div>
                        <form role='form'>
                            <div class="modal-body">
                                <div class="replay-box" style="margin: 5px">
                                    <input type="hidden" ng-model="up_id" class="form-control">
                                    <?php include 'alertMess.php'; ?>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <!--<h2>Leave a replay</h2>-->
                                            <div class="form-group">
                                                <div class="blank-arrow">
                                                    <label>Image</label>
                                                </div>
                                                <img src="web/images/courtage/{{up_photo}}" width="45px" height="40px" class="img-responsive img-circle box_orange">
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <div class="blank-arrow">
                                                    <label>Nouvelle photo</label>
                                                </div>
                                                <span>*</span>
                                                <input type="file" demo-file-model="imageProfil" class="form-control box_orange rounded">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <div class="blank-arrow">
                                                    <label>
                                                        Upload
                                                    </label>
                                                </div>
                                                <button type="button" class="form-control box_orange rounded btn btn-warning" ng-click="uploadFile()">
                                                    <i class="fa fa-upload"></i> 
                                                    Transferer
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="blank-arrow">
                                                    <label>Matricule</label>
                                                </div>
                                                <span>*</span>
                                                <input type="text" ng-model="up_matricule" readonly class="form-control box_orange rounded" placeholder="votre matricule ici...">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="blank-arrow">
                                                    <label>Profil</label>
                                                </div>
                                                <span>*</span>
                                                <select class="form-control box_orange rounded" ng-model="up_select_profil">
                                                    <option value="{{obj.id_profile}}" ng-repeat="obj in listProfils">{{obj.libelle}}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="blank-arrow">
                                                    <label>Pseudo</label>
                                                </div>
                                                <span>*</span>
                                                <input type="text" ng-model="up_pseudo" class="form-control box_orange rounded" placeholder="votre matricule ici...">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="blank-arrow">
                                                    <label>Email</label>
                                                </div>
                                                <span>*</span>
                                                <input type="email" ng-model="up_email" class="form-control box_orange rounded" placeholder="votre email ici...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="blank-arrow">
                                                    <label>Nom</label>
                                                </div>
                                                <span>*</span>
                                                <input type="text" ng-model="up_nom" class="form-control box_orange rounded" placeholder="votre nom ici...">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="blank-arrow">
                                                    <label>Prenom</label>
                                                </div>
                                                <span>*</span>
                                                <input type="text" ng-model="up_prenom" class="form-control box_orange rounded" placeholder="votre prenom ici...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="blank-arrow">
                                                    <label>Telephone</label>
                                                </div>
                                                <input type="text" ng-model="up_tel" class="form-control box_orange rounded" placeholder="votre telephone ici...">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="blank-arrow">
                                                    <label>Adresse</label>
                                                </div>
                                                <input type="text" ng-model="up_adresse" class="form-control box_orange rounded" placeholder="votre adresse ici...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="blank-arrow">
                                                    <label>Profession</label>
                                                </div>
                                                <input type="text" ng-model="up_profession" class="form-control box_orange rounded" placeholder="votre profession ici...">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="blank-arrow">
                                                    <label>Date de naissance</label>
                                                </div>
                                                <input type="date" ng-model="up_date_naiss" class="form-control box_orange rounded">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="blank-arrow">
                                                    <label>FaceBook</label>
                                                </div>
                                                <input type="text" ng-model="up_facebook" class="form-control box_orange rounded" placeholder="facebook ...">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="blank-arrow">
                                                    <label>Twitter</label>
                                                </div>
                                                <input type="text" ng-model="up_twitter" class="form-control box_orange rounded" placeholder="twitter ...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="blank-arrow">
                                                    <label>Google</label>
                                                </div>
                                                <input type="text" ng-model="up_google" class="form-control box_orange rounded" placeholder="Google ...">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="blank-arrow">
                                                    <label>Youtube</label>
                                                </div>
                                                <input type="text" ng-model="up_youtube" class="form-control box_orange rounded" placeholder="Youtube ...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="blank-arrow">
                                                    <label>LinkedIn</label>
                                                </div>
                                                <input type="text" ng-model="up_linkedin" class="form-control box_orange rounded" placeholder="LinkedIn ...">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="blank-arrow">
                                                    <label>Site</label>
                                                </div>
                                                <input type="text" ng-model="up_site" class="form-control box_orange rounded" placeholder="Site ...">
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/Repaly Box-->
                                <?php include 'alertMess.php'; ?>
                            </div>
                            <div class="modal-footer get" style="margin-top: 0px;padding-bottom: 0px;">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <button type="submit" ng-click="updateMembre()" class="btn btn-success form-control rounded">
                                                <i class="fa fa-check"></i>&nbsp;Modifier
                                            </button>
                                        </div>
                                        <div class="col-sm-6">
                                            <!--class="close" data-dismiss="modal" aria-hidden="true"-->
                                            <button type="button" class="btn btn-danger form-control rounded">
                                                <i class="fa fa-times"></i>&nbsp;Annuler
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-8 replay-box" style="margin: 0px">
                <div class="panel panel-warning">
                    <div class="panel-heading">Details</div>
                    <div class="panel-body">
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <div class="blank-arrow">
                                    <label>Matricule</label>
                                </div><br><br>
                                <div class="form-control" style="box-shadow: 1px 1px 1px #FE980F">
                                    {{user.code}}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="blank-arrow">
                                    <label>Email</label>
                                </div><br><br>
                                <div class="form-control" style="box-shadow: 1px 1px 1px #FE980F">
                                    {{user.email}}
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <div class="blank-arrow">
                                    <label>Prenom</label>
                                </div><br><br>
                                <div class="form-control" style="box-shadow: 1px 1px 1px #FE980F">
                                    {{user.prenom}}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="blank-arrow">
                                    <label>Nom</label>
                                </div><br><br>
                                <div class="form-control" style="box-shadow: 1px 1px 1px #FE980F">
                                    {{user.nom}}
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <div class="blank-arrow">
                                    <label>Telephone</label>
                                </div><br><br>
                                <div class="form-control" style="box-shadow: 1px 1px 1px #FE980F">
                                    {{user.tel}}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="blank-arrow">
                                    <label>Adresse</label>
                                </div><br><br>
                                <div class="form-control" style="box-shadow: 1px 1px 1px #FE980F">
                                    {{user.adresse}}
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <div class="blank-arrow">
                                    <label>Profession</label>
                                </div><br><br>
                                <div class="form-control" style="box-shadow: 1px 1px 1px #FE980F">
                                    {{user.profession}}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="blank-arrow">
                                    <label>Date de naissance</label>
                                </div><br><br>
                                <div class="form-control" style="box-shadow: 1px 1px 1px #FE980F">
                                    {{user.date_naissance}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 replay-box" style="margin: 0px">
                <div class="panel panel-warning">
                    <div class="panel-heading">Reseau sociaux</div>
                    <div class="panel-body">
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <div class="blank-arrow">
                                    <label>Facebook</label>
                                </div><br><br>
                                <div class="form-control" style="box-shadow: 1px 1px 1px #FE980F">
                                    {{user.facebook}}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="blank-arrow">
                                    <label>Twitter</label>
                                </div><br><br>
                                <div class="form-control" style="box-shadow: 1px 1px 1px #FE980F">
                                    {{user.twitter}}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="blank-arrow">
                                    <label>Google</label>
                                </div><br><br>
                                <div class="form-control" style="box-shadow: 1px 1px 1px #FE980F">
                                    {{user.google}}
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <div class="blank-arrow">
                                    <label>Youtube</label>
                                </div><br><br>
                                <div class="form-control" style="box-shadow: 1px 1px 1px #FE980F">
                                    {{user.youtube}}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="blank-arrow">
                                    <label>LinkedIn</label>
                                </div><br><br>
                                <div class="form-control" style="box-shadow: 1px 1px 1px #FE980F">
                                    {{user.linkedin}}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="blank-arrow">
                                    <label>Site</label>
                                </div><br><br>
                                <div class="form-control" style="box-shadow: 1px 1px 1px #FE980F">
                                    {{user.site}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>