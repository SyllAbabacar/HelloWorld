<?php
include_once '../services/Session.php';
Session::initSession();
?>

<div class="col-sm-9">
    <h2 class="title text-center">Details Annonce</h2>
    <div class="product-details"><!--product-details-->
        <div class="col-sm-5">
            <div class="view-product">
                <img src="web/images/courtage/{{annonce.listMedia[0].fichier}}" class="img-thumbnail" style="box-shadow: 2px 1px 2px 1px grey; border: 5px white solid; padding: 5px;">
                <h3 class="" ng-if="(<?= Session::getIdUser() ?> == annonce.Proprietaire.id_membre || <?= Session::getIdProfil() ?> == 5) && annonce.listMedia.length < 4">
                    <a href="" data-toggle="modal" data-target="#newtof" title="Ajouter" class="text-primary btn">
                        <i class="fa fa-2x fa-plus-circle"></i>&nbsp;
                    </a>
                </h3>
            </div>
            <div id="similar-product" class="carousel slide center-block" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner thumbnail">
                    <div class="item active">
                        <a href="#/detailAnnonce/{{annonce.id_annonce}}/image/{{obj.id_media}}" ng-repeat="obj in annonce.listMedia| limitTo:4" class="" title="Zoom">
                            <img src="web/images/courtage/{{obj.fichier}}" alt="" class="img-responsive img-circle box_orange" style="width: 60px; height: 60px;">
                        </a>
                    </div>
                </div>
            </div>
            <div class="panel panel-yellow" ng-show="idMedia != null">
                <div class="replay-box col-sm-12 thumbnail" style="margin: 0px;">                    
                    <div class="panel-heading pull-right">
                        <a href="#/detailAnnonce/{{annonce.id_annonce}}" class="" style="margin: 0px" title="Reduire">
                            <i class="fa fa-times-circle-o text-danger fa-2x"></i>
                        </a>
                    </div>
                    <div>
                        <img class="thumbnail img-responsive" style="width: 100%;" src="web/images/courtage/{{imageAnn.fichier}}">
                        <div ng-if="<?= Session::getIdUser() ?> == annonce.Proprietaire.id_membre || <?= Session::getIdProfil() ?> == 5">
                            <button class="btn btn-success rounded form-control" type="button" ng-show="formModif" ng-click="modifier()">
                                <i class="fa fa-edit"></i>&nbsp;
                                Modifier
                            </button>
                            <button class="btn btn-danger rounded form-control" type="button" ng-hide="formModif" ng-click="annuler()">
                                <i class="fa fa-times"></i>&nbsp;
                                Annuler
                            </button>
                        </div>
                    </div>
                    <form action="" enctype="multipart/form-data">
                        <div class="panel-body" ng-hide="formModif">
                            <div class="single-blog-post">
                                <hr>
                                <div class="form-group">
                                    <div class="blank-arrow">
                                        <label>Image</label>
                                    </div>
                                    <span>*</span>
                                    <input type="file" required demo-file-model="myFile1" class="form-control box_orange rounded" id ="myFileField" accept="image/jpeg,image/jpg,image/png,image/gif"/>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="blank-arrow">
                                                <label>Description :</label>
                                            </div><br><br>
                                            <textarea rows="5" ng-model="updescImage" class="form-control box_orange rounded" placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12" ng-if="uptof != ''">
                                        <div class="form-group">
                                            <div class="blank-arrow">
                                                <label>Aperçu</label>
                                            </div><br><br>
                                            <div class="">
                                                <img src="web/images/courtage/{{uptof}}" class="box_orange rounded img-thumbnail" style="width: 100%;"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php include_once '../partials/alertMess.php'; ?>
                        </div>
                        <div class="panel-footer get" ng-hide="formModif">
                            <div class="row">
                                <div class="col-sm-12" ng-hide="valid">
                                    <button type="button" ng-click="uploadFile()" class="btn btn-warning rounded form-control">
                                        <i class="fa fa-upload"></i>&nbsp;Transfere
                                    </button>
                                </div>
                                <div class="col-sm-12" ng-show="valid">
                                    <button type="button" ng-click="upMedia()" class="fadeInLeftBig animated btn btn-success form-control rounded">
                                        <i class="fa fa-edit"></i>&nbsp;Modifier
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="product-information" style="padding: 0px;"><!--/product-information-->
                <!--<img src="web/images/product-details/new.jpg" class="newarrival" alt="">-->
                <h2 class="black_title" style="color: #FE980F;">{{annonce.libelle| uppercase}}</h2>
                <?php if (Session::isSessionExit()): ?>
                    <div class="text-right" ng-if="annonce.id_proprietaire == <?= Session::getIdUser() ?> || <?= Session::getIdProfil() ?> == 5">
                        <a class="text-success btn btn-warning" href="" title="Modifier l'annonce" data-toggle="modal" data-target="#UpAnnonce">
                            <i class="fa fa-edit fa-2x"></i>
                        </a>&emsp;
                        <a class="text-warning btn btn-info" href="" title="Modifier gallerie" data-toggle="modal" data-target="#gallerie">
                            <i class="fa fa-picture-o fa-2x"></i>
                        </a>&emsp;
                        <!--data-toggle="modal" data-target="#promouvoirAnn"-->
                        <a class="text-info btn btn-success" href="#/promouvoire/{{annonce.id_annonce}}" title="Promouvoir l'annonce">
                            <i class="fa fa-star fa-2x"></i>
                        </a>&emsp;
                        <a class="text-info btn btn-danger" ng-if="<?= Session::getIdProfil() ?> == 5" href="" title="Affecter Commercial" data-toggle="modal" data-target="#AffCom">
                            <i class="fa fa-check-circle fa-2x"></i>
                        </a>
                    </div>
                <?php endif; ?>
                <div>
                    <div class="modal fade" id="UpAnnonce" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">                                
                                <div class="modal-header get" style="margin-top: 0px">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h1 class="modal-title text-center" id="myModalLabel">
                                        <i class="fa fa-edit"></i>&nbsp;
                                        Modifier Annonce
                                    </h1>
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-warning text-center">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        <i class="fa fa-warning"></i>&nbsp;
                                        Attention si vous modifier ce annonce il sera depublier durant un temps de traitement defini ...
                                    </div>
                                    <form role='form'>
                                        <div class="row" style="margin-bottom: 15px">
                                            <div class="col-lg-6 form-group">
                                                <label>Activite :</label>
                                                <select ng-model="selected_activite" class="form-control">
                                                    <option ng-repeat="obj in listActivite" value="{{obj.id_activite}}" >{{obj.lib_activite}}</option>
                                                </select>
                                                <!--{{selected_activite}}-->
                                            </div>
                                            <div class="col-lg-6 form-group">
                                                <label>Type Annonce :</label>
                                                <select required ng-model="selected_typeannonce" class="form-control">
                                                    <option ng-if="obj.id_activite == selected_activite" value="{{obj.id_type_annonce}}" ng-repeat="obj in listTypeAnnonce">
                                                        {{obj.libelle}}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 15px">
                                            <div class="col-lg-6 form-group">
                                                <label>Localite :</label>
                                                <select ng-model="selected_localite" class="form-control">
                                                    <option value="{{obj.id_localite}}" ng-repeat="obj in listLocalite">{{obj.nom}}</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6 form-group">
                                                <label>Transaction :</label>
                                                <select ng-model="selected_transaction" class="form-control">
                                                    <option value="1">Vente</option>
                                                    <option value="0">Location</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 15px">
                                            <div class="col-sm-12 form-group">
                                                <label>Adresse :</label>
                                                <input type="text" ng-model="adresse" placeholder="Adresse" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 15px">
                                            <div class="col-sm-6 form-group">
                                                <label>Libelle :</label>
                                                <input type="text" ng-model="libelle" placeholder="Libelle" class="form-control" />
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>Montant :</label>
                                                <input type="text" ng-model="montant" placeholder="Montant" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 form-group">
                                                <label>Description :</label>
                                                <textarea rows="5" ng-model="description" placeholder="Description" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <?php include '../partials/alertMess.php'; ?>
                                        <div class="modal-footer get row" style="margin-top: 0px;margin-bottom: 0px; padding-bottom: 0px;">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <button type="submit" ng-click="updateAnnonce()" class="btn btn-success form-control">
                                                            <i class="fa fa-save"></i>&nbsp;Modifier
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <button type="button" class="btn btn-danger form-control" class="close" data-dismiss="modal" aria-hidden="true">
                                                            <i class="fa fa-times"></i>&nbsp;Fermer
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="AffCom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">                                
                                <div class="modal-header get" style="margin-top: 0px">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h1 class="modal-title text-center" id="myModalLabel">
                                        <i class="fa fa-edit"></i>&nbsp;
                                        Affectation Commercial
                                    </h1>
                                </div>
                                <form role='form'>
                                    <div class="modal-body replay-box" style="margin: 0px">
                                        <div class="row" ng-if="annonce.id_courtier != null">
                                            <div class="col-sm-12 form-group">
                                                <div class="blank-arrow">
                                                    <label>
                                                        <i class="fa fa-warning"></i>&nbsp;
                                                        Attention :
                                                    </label>
                                                </div><br><br>
                                                <div class="alert alert-warning">
                                                    Cette annonce est deja affecter à {{annonce.Courtier.prenom}} {{annonce.Courtier.nom}} depuis le {{date_validation}}.
                                                    <hr>
                                                    <div class="form-group col-sm-5">
                                                        <button ng-click="afficher()" ng-hide="aff" class="btn btn-warning form-control">
                                                            <i class="fa fa-edit"></i>&nbsp;
                                                            Changer l'affectation
                                                        </button>
                                                        <button ng-click="masquer()" ng-show="aff" class="btn btn-danger form-control pull-right">
                                                            <i class="fa fa-edit"></i>&nbsp;
                                                            Annuler
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" ng-show="aff">
                                            <div class="row">
                                                <div class="col-sm-6 form-group">
                                                    <div class="blank-arrow">
                                                        <label>Commerciale</label>
                                                    </div><br><br>
                                                    <!--<span>{{annonce.id_courtier}}</span>-->
                                                    <select class="form-control box_orange" ng-model="selected_id_commerciaux">
                                                        <!--<option></option>-->
                                                        <option value="{{obj.id_membre}}" ng-repeat="obj in listCourtier">
                                                            {{obj.nom}} {{obj.prenom}} ({{obj.code}})
                                                        </option>
                                                    </select>
                                                    <!--{{selected_id_commerciaux}}-->
                                                </div>
                                            </div>                                        

                                            <div class="" ng-repeat="obj in listCourtier" ng-if="selected_id_commerciaux === obj.id_membre">
                                                <div class="panel panel-warning col-sm-12">
                                                    <div class="panel-heading">Details</div>
                                                    <div class="panel-body">
                                                        <div class="row form-group">
                                                            <div class="col-sm-6">
                                                                <div class="blank-arrow">
                                                                    <label>Photo</label>
                                                                </div><br><br>
                                                                <div>
                                                                    <img src="web/images/courtage/{{obj.photo}}" class="img-thumbnail img-responsive">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="row col-sm-12 form-group">
                                                                    <div class="blank-arrow">
                                                                        <label>Matricule Commerciale</label>
                                                                    </div><br><br>
                                                                    <div class="form-control" style="box-shadow: 1px 1px 1px #FE980F">
                                                                        {{obj.code}}
                                                                    </div>
                                                                </div>
                                                                <div class="row col-sm-12 form-group">
                                                                    <div class="blank-arrow">
                                                                        <label>Pseudo</label>
                                                                    </div><br><br>
                                                                    <div class="form-control" style="box-shadow: 1px 1px 1px #FE980F">
                                                                        {{obj.pseudo}}
                                                                    </div>
                                                                </div>
                                                                <div class="row col-sm-12 form-group">
                                                                    <div class="blank-arrow">
                                                                        <label>Email</label>
                                                                    </div><br><br>
                                                                    <div class="form-control" style="box-shadow: 1px 1px 1px #FE980F">
                                                                        {{obj.email}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-6">
                                                                <div class="blank-arrow">
                                                                    <label>Prenom</label>
                                                                </div><br><br>
                                                                <div class="form-control" style="box-shadow: 1px 1px 1px #FE980F">
                                                                    {{obj.prenom}}
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="blank-arrow">
                                                                    <label>Nom</label>
                                                                </div><br><br>
                                                                <div class="form-control" style="box-shadow: 1px 1px 1px #FE980F">
                                                                    {{obj.nom}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-12">
                                                                <div class="blank-arrow">
                                                                    <label>Adresse</label>
                                                                </div><br><br>
                                                                <div class="form-control" style="box-shadow: 1px 1px 1px #FE980F">
                                                                    {{obj.adresse}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-6">
                                                                <div class="blank-arrow">
                                                                    <label>Telephone</label>
                                                                </div><br><br>
                                                                <div class="form-control" style="box-shadow: 1px 1px 1px #FE980F">
                                                                    {{obj.tel}}
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="blank-arrow">
                                                                    <label>Date de naissance</label>
                                                                </div><br><br>
                                                                <div class="form-control" style="box-shadow: 1px 1px 1px #FE980F">
                                                                    {{obj.date_naissance}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-12">
                                                                <div class="blank-arrow">
                                                                    <label>Profession</label>
                                                                </div><br><br>
                                                                <div class="form-control" style="box-shadow: 1px 1px 1px #FE980F">
                                                                    {{obj.profession}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php include 'alertMess.php'; ?>
                                    </div>
                                    <div class="modal-footer get" style="margin-top: 0px;margin-bottom: 0px; padding-bottom: 0px;">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3"></div>
                                                <div class="col-sm-6">
                                                    <button type="submit" ng-click="validAnnonce()" class="btn btn-success form-control">
                                                        <i class="fa fa-save"></i>&nbsp;Valider
                                                    </button>
                                                </div>
                                                <div class="col-sm-3">
                                                    <button type="button" class="btn btn-danger form-control" class="close" data-dismiss="modal" aria-hidden="true">
                                                        <i class="fa fa-times"></i>&nbsp;Fermer
                                                    </button>
                                                </div>
                                                <div class="col-sm-3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="gallerie" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header get" style="margin: 0px">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h1 class="modal-title text-center" id="myModalLabel">
                                        Gallerie
                                    </h1>
                                </div>
                                <form action="" enctype="multipart/form-data">
                                    <div class="modal-body replay-box" style="margin: 0px">
                                        <div class="row">
                                            <div ng-hide="annonce.listMedia.length > 3">
                                                <div class="col-sm-5">
                                                    <a href="" class="btn btn-success form-control" data-toggle="modal" data-target="#newtof">
                                                        <i class="fa fa-plus"></i>&nbsp;Ajouter photo
                                                    </a>
                                                </div><br>
                                                <hr>
                                            </div>
                                            <div class="col-sm-3" ng-repeat="obj in annonce.listMedia">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="web/images/courtage/{{obj.fichier}}" width="100%" height="250px" />
                                                            <!--<h4>{{obj.description}}</h4>-->
                                                        </div>
                                                        <div class="product-overlay">
                                                            <div class="overlay-content text-justify text-center">
                                                                {{obj.description}}
                                                                <a href="" class="btn btn-default form-control">
                                                                    <i class="fa fa-edit"></i>&nbsp;Modifier
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer get" style="margin: 0px">
                                        <div class="pull-right col-sm-4">
                                            <a href="" class="btn btn-danger form-control" class="close" data-dismiss="modal" aria-hidden="true">
                                                <i class="fa fa-times"></i>&nbsp;Fermer
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="newtof" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header get" style="margin: 0px">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h1 class="modal-title text-center" id="myModalLabel">
                                        Gallerie
                                    </h1>
                                </div>
                                <form action="" enctype="multipart/form-data">
                                    <div class="modal-body replay-box" ng-controller="annoncesCtrl" style="margin: 0px">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="panel-body">
                                                    <div class="single-blog-post">
                                                        <div class="form-group">
                                                            <div class="blank-arrow">
                                                                <label>Image</label>
                                                            </div>
                                                            <span>*</span>
                                                            <input type="file" required="required" demo-file-model="myFile1"  class="form-control box_orange rounded" id ="myFileField" accept="image/jpeg,image/jpg,image/png,image/gif"/>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <div class="blank-arrow">
                                                                        <label>Description :</label>
                                                                    </div><br><br>
                                                                    <textarea rows="5" ng-model="descImage1" class="form-control box_orange rounded" placeholder="Description"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12" ng-if="tof1 != ''">
                                                                <div class="form-group">
                                                                    <div class="blank-arrow">
                                                                        <label>Aperçu</label>
                                                                    </div><br><br>
                                                                    <div class="">
                                                                        <img src="web/images/courtage/{{tof1}}" class="box_orange rounded img-thumbnail"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <?php
                                                        include 'alertMess.php';
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer get" style="margin: 0px">
                                        <div class="col-sm-4">
                                            <button type="button" ng-hide="valid" ng-click="uploadFile1()" class="btn btn-warning rounded form-control">
                                                <i class="fa fa-upload"></i> Ajouter
                                            </button>
                                        </div>
                                        <div class="col-sm-4">
                                            <button type="button" ng-show="valid" ng-click="saveMedias()" class="btn btn-success form-control rounded">
                                                <i class="fa fa-check-circle"></i>&nbsp;Enregistrer
                                            </button>
                                        </div>
                                        <div class="pull-right col-sm-4">
                                            <a href="" class="btn btn-danger form-control rounded" class="close" data-dismiss="modal" aria-hidden="true">
                                                <i class="fa fa-times"></i>&nbsp;Fermer
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="promouvoirAnn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header get" style="margin-top: 0px">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h1 class="modal-title text-center" id="myModalLabel">
                                        Promouvoire Annonce
                                    </h1>
                                </div>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="UpEtatAnnonce" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header get" style="margin-top: 0px">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h1 class="modal-title text-center" id="myModalLabel">
                                        Modifier l'atat de l'annonce
                                    </h1>
                                </div>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <p class="badge" style="color: white">
                    <b>Reference:</b>
                    {{annonce.reference}}
                </p>
                <span>
                    <span class="price">
                        <i class="fa"></i> {{annonce.montant}} Fcfa
                    </span>
                </span>
                <p>
                    <b>Activite:</b> 
                    {{annonce.typeAnnonce.activite.lib_activite}}
                </p>
                <p>
                    <b>Type:</b>
                    {{annonce.typeAnnonce.libelle}}
                </p>
                <p ng-switch="annonce.transaction">
                    <b>Transaction:</b>
                    <span ng-switch-when="0" style="margin: 0px">Location</span>
                    <span ng-switch-when="1" style="margin: 0px">Vente</span>
                </p>
                <?php if (!Session::isSessionExit()): ?>
                    <div ng-if="annonce.etat_annonce != 0">
                        <p>
                            <b>Date de publication: </b>
                            {{annonce.date_validation}}
                        </p>
                    </div>    
                <?php endif; ?>
                <p ng-switch="annonce.etat_annonce">
                    <b>Etat Annonce:</b>
                    <span ng-switch-when="0" style="margin: 0px">En entente</span>
                    <span ng-switch-when="1" style="margin: 0px">Disponible</span>
                    <span ng-switch-when="2" style="margin: 0px">Indisponible</span>
                    <span ng-switch-when="3" style="margin: 0px">Supprimer</span>
                </p>
                <h3 class="get alert">Description</h3>
                <p>
                    {{annonce.description}}
                </p>
                <?php if (Session::isSessionExit()): ?>
                    <h3 class="get alert">Information suplementaire</h3>
                    <p>
                        <b>Date de creation: </b>
                        {{annonce.date_creation}}
                    </p>
                    <div ng-if="annonce.etat_annonce != 0">
                        <p>
                            <b>Date de publication: </b>
                            {{annonce.date_validation}}
                        </p>
                        <p>
                            <b>Date d'expriration: </b>
                            {{annonce.date_expiration}}
                        </p>
                        <p>
                            <b>Duree de publication: </b>
                            {{annonce.date_expiration}}
                        </p>
                        <p>
                            <b>Il vous reste: </b>10 jour(s)
                        </p>
                    </div>
                    <h3 class="get alert">Zone d'affichage</h3>
                    <div ng-repeat="obj in dureeAffichages">
                        <b>{{obj.affichage.lib_affichage}}: </b>
                        <div class="alert alert-warning">
                            <p>
                                <b>Date debut: </b>
                                {{obj.date_debut_duree}}
                            </p>
                            <p>
                                <b>Date fin: </b>
                                {{obj.date_fin_duree}}
                            </p>
                        </div>
                    </div>
                    <div ng-if="dureeAffichages.length == 0" class="alert alert-danger">
                        Votre annonce n'est dans aucune option de visiblite.
                        Ainsi pour promouvoir cette derniere veuillez cliquer sur le button au dessous a fin d'avoir plus de visibilite. 
                        Merci!!!<hr>
                        <button class="btn btn-warning">
                            Promouvoir l'annonce
                        </button>
                    </div>
                <?php endif; ?>
                <h3 class="get alert">Propritaire</h3>
                <div ng-if="annonce.Proprietaire.profil == 1">
                    <p>
                        <b>Proprietaire: </b>
                        Hellow Annonce
                    </p>
                    <p>
                        <b>Email: </b>
                        info@hellowannonce.com
                    </p>
                    <p>
                        <b>Adresse: </b>
                        Scat Urbam, Immeuble Serigne Babacar Sy
                    </p>
                    <p>
                        <b>Telephone: </b>
                        {{annonce.Courtier.tel}}
                    </p>
                </div>
                <div ng-if="annonce.Proprietaire.profil == 3">
                    <p>
                        <b>Proprietaire: </b>
                        {{annonce.Proprietaire.pseudo}}
                    </p>
                    <p>
                        <b>Email: </b>
                        {{annonce.Proprietaire.email}}
                    </p>
                    <p>
                        <b>Adresse: </b>
                        {{annonce.Proprietaire.adresse}}
                    </p>
                    <p>
                        <b>Telephone:</b>
                        {{annonce.Proprietaire.tel}}
                    </p>
                </div><hr>
                <div ng-if="(<?= Session::getIdProfil() ?> == 5 || <?= Session::getIdUser() ?> == annonce.Proprietaire.id_membre || <?= Session::getIdUser() ?> == annonce.Courtier.id_membre) && annonce.Proprietaire.profil == 1">
                    <h3 class="get alert">Commerciale</h3>
                    <div>
                        <p>
                            <b>Matricule: </b>
                            {{annonce.Courtier.matricule}}
                        </p>
                        <p>
                            <b>Nom: </b>
                            {{annonce.Courtier.pseudo}}
                        </p>
                        <p>
                            <b>Email: </b>
                            {{annonce.Courtier.email}}
                        </p>
                        <p>
                            <b>Adresse: </b>
                            {{annonce.Courtier.adresse}}
                        </p>
                        <p>
                            <b>Telephone:</b>
                            {{annonce.Courtier.tel}}
                        </p>
                    </div><hr>
                </div>
                <?php // if (!Session::isSessionExit()): ?>
                <div class="row" ng-if="<?= Session::getIdUser() ?> == 0 || annonce.id_proprietaire != <?= Session::getIdUser() ?>">
                    <div class="col-lg-6">
                        <!--href="#/newmessage/{{annonce.id_annonce}}"-->
                        <button type="button"  data-toggle="modal" data-target="#ModalMess" class="btn btn-success form-control">
                            Poster un message
                        </button>
                        <!-- Modal -->
                        <div class="modal fade animated" ng-controller="newmessageCtrl" id="ModalMess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header get" style="margin-top: 0px">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h1 class="modal-title text-center" id="myModalLabel">
                                            <i class="fa fa-envelope-o"></i>
                                            Envoyer message
                                        </h1>
                                    </div>
                                    <?php
                                    include 'alertMess.php';
                                    ?>
                                    <form action="" ng-submit="saveMessage()">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <!--<i class="fa fa-user-md"></i>-->
                                                        <input type="text" ng-model="nom" class="form-control" required placeholder="Votre nom" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <!--<i class="fa fa-key"></i>-->
                                                        <input type="text" ng-model="email" class="form-control" required placeholder="Votre email" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <!--<i class="fa fa-key"></i>-->
                                                <input type="text" ng-model="objet" class="form-control" required placeholder="Votre objet" />
                                            </div>
                                            <div class="form-group">
                                                <!--<i class="fa fa-key"></i>-->
                                                <textarea class="form-control" ng-model="contenu" rows="5" placeholder="Saisir votre message..."></textarea>
                                            </div>
                                            <?php
                                            include 'alertMess.php';
                                            ?>
                                        </div>
                                        <div class="modal-footer get" style="margin: 0px">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-3"></div>
                                                    <div class="col-sm-3">
                                                        <button type="submit" class="btn btn-success form-control">
                                                            <i class="fa fa-send"></i>&nbsp;
                                                            Envoyer
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <button type="button" class="btn btn-danger form-control" data-dismiss="modal">
                                                            <i class="fa fa-times"></i>&emsp;
                                                            Fermer
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </div>
                    <div class="col-lg-6">
                        <button class="btn btn-danger form-control" data-toggle="modal" data-target="#ModalPainte">
                            Poster une plainte
                        </button>
                        <!-- Modal -->
                        <div class="modal fade rounded" id="ModalPainte" ng-controller="newmessageCtrl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header get" style="margin-top: 0px">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h1 class="modal-title text-center" id="myModalLabel">
                                            Poster votre plainte
                                        </h1>
                                    </div>
                                    <?php
                                    include '../partials/alertMess.php';
                                    ?>
                                    <!--<div class="alert alert-info">{{msg}}</div>-->
                                    <form role="form" ng-submit="savePlainte()">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Nom" type="text" ng-model="plainte.nom">
                                                <!--{{nom}}-->
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Email" type="email" ng-model="plainte.email">
                                                <!--{{email}}-->
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Objet" type="text" ng-model="plainte.objet" style="margin: 15px 0px 0px 0px; width: 99.5%;">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="5" placeholder="Saisir votre message..."  ng-model="plainte.message"></textarea>
                                            </div>
                                        </div>
                                        <?php
                                        include 'alertMess.php';
                                        ?>
                                        <div class="modal-footer get" style="margin-top: 0px">
                                            <div class="row">
                                                <div class="col-sm-3"></div>
                                                <div class="col-sm-3">
                                                    <button type="submit" class="btn btn-block btn-success form-control">
                                                        <i class="fa fa-send"></i>&emsp;
                                                        Envoyer
                                                    </button>
                                                </div>
                                                <div class="col-sm-3">
                                                    <button type="button" class="btn btn-danger form-control" data-dismiss="modal">
                                                        <i class="fa fa-times"></i>&emsp;
                                                        Fermer
                                                    </button>
                                                </div>
                                                <div class="col-sm-3"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </div>
                </div>
                <?php // endif;  ?>
            </div>
        </div><!--/product-information-->
    </div>
    <div class="category-tab shop-details-tab"><!--category-tab-->
        <!--{{user}}-->
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                <li>
                    <a href="" data-toggle="tab">
                        <i class="fa fa-comments"></i> 
                        Commentaires
                    </a>
                </li>
            </ul>
        </div>
        <div class="">
            <div class="fade active in" id="">
                <?php
                if (Session::isSessionExit()):
                    ?>
                    <div class="panel panel-group alert">
                        <form role="form" ng-submit="saveComment()">
                            <div class="row form-group">
                                <div class="text-center col-sm-2" style="">
                                    <img src="web/images/courtage/<?= Session::getPhoto() ?>" width="70px" height="65px" class="img-circle box_orange">
                                    <br/>
                                    <span class="btn-outline">
                                        <u><?= $_SESSION['user']->pseudo ?></u>
                                    </span>
                                </div>
                                <div class="col-sm-10">
                                    <textarea ng-model="commentaire" required placeholder="Commenter ici ..." class="form-control rounded" style="background-color: white; height: 100px; border: #FE980F solid 1px;"></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="form-group text-right col-lg-5 pull-right">
                                    <button type="submit" class="rounded btn btn-warning get form-control" style="margin: 0px;">
                                        <i class="fa fa-comments"></i>&nbsp;
                                        Laisser un commentaire
                                    </button>
                                </div>
                            </div>
                        </form>
                        <?php include '../partials/alertMess.php'; ?>
                    </div>
                    <?php
                else:
                    ?>            
                    <div class="alert text-center">
                        <h3>
                            Veuillez vous 
                            <a href="#/connexion">connecter</a> 
                            ou vous <a href="#/membre">s'inscrire</a>
                            pour pouvoir donner votre avis sur  l'annonce
                        </h3>
                    </div>
                <?php
                endif;
                ?>
                <div ng-repeat="obj in annonce.Commentaires" class="">
                    <!--{{obj}}-->
                    <div class="form-group">
                        <div class="col-sm-2 text-center">
                            <img src="web/images/courtage/{{obj.User.photo}}" width="70px" height="65px" class="img-circle box_orange">
                            <br/>
                            <span class="btn-outline">
                                <u>{{obj.User.pseudo}}</u>
                            </span>
                        </div>
                        <div class="col-sm-10 text-justify rounded"  style="">
                            <div class="alert alert-warning rounded">
                                <blockquote class="">{{obj.contenu}}</blockquote><hr>
                                <span class="text-right">{{obj.date}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--{{annonce.Commentaires.length}}-->
                <div ng-if="annonce.Commentaires.length == 0" class="text-center alert alert-danger alert-dismissible">
                    Aucun commentaire pour le moment !!! 
                </div>
            </div>
        </div>
        <!--<h2 class="title text-center">Recommemdation</h2>-->
        <div class="">

        </div>
    </div><!--/category-tab-->
</div><!--/product-details-->
