<?php
include_once '../services/Session.php';
Session::initSession();
?>
<div class="col-sm-9 padding-right">
    <h2 class="title text-center">Demande d'affichage</h2>   
    <div class="blog-post-area">
        <div class="row">
            <div class="col-sm-6 replay-box" style="margin: 0px">
                <div class="panel panel-warning">
                    <div class="panel-heading">                        
                        <div class="row">
                            <div class="col-sm-12">
                                <strong class="h2">
                                    Annonce
                                </strong>
                                <button data-toggle="modal" data-target="#detailsAnnonce" class="btn btn-warning pull-right">
                                    <i class="fa fa-plus"></i>
                                </button> 
                                <div class="modal fade" id="detailsAnnonce" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">                                
                                            <div class="modal-header get" style="margin-top: 0px">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h1 class="modal-title text-center" id="myModalLabel">
                                                    <i class="fa fa-edit"></i>&nbsp;
                                                    Details
                                                </h1>
                                            </div>
                                            <div class="modal-body">
                                                <div class="panel panel-warning">
                                                    <div class="panel-heading">                        
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <strong class="h2">
                                                                    Annonce
                                                                </strong>
                                                                <button class="btn btn-warning pull-right">
                                                                    <i class="fa fa-plus"></i>
                                                                </button> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row form-group">
                                                            <div class="col-sm-5">
                                                                <div class="blank-arrow">
                                                                    <label>Apercu</label>
                                                                </div>
                                                                <div class="" style="">
                                                                    <img width="100%" style="height: 150px" src="web/images/courtage/{{duree.annonce.listMedia[0].fichier}}" class="img-thumbnail img-responsive img-circle">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-7">
                                                                <div class="blank-arrow">
                                                                    <label>Informations</label>
                                                                </div><br><br><br>
                                                                <div class="post-meta form-group">
                                                                    <div ng-switch="duree.annonce.etat_annonce" class="form-group">
                                                                        <strong ng-switch-when="0" class="text-capitalize h5">
                                                                            <i class="fa fa-certificate text-info"></i>&nbsp;
                                                                            En attentes
                                                                        </strong>
                                                                        <strong ng-switch-when="1" class="text-capitalize h5">
                                                                            <i class="fa fa-certificate text-success"></i>&nbsp;
                                                                            Disponibles
                                                                        </strong>
                                                                        <strong ng-switch-when="2" class="text-capitalize h5">
                                                                            <i class="fa fa-certificate text-danger"></i>&nbsp;
                                                                            Indisponibles
                                                                        </strong>
                                                                    </div>
                                                                    <ul>
                                                                        <li class="form-group">
                                                                            <i class="fa fa-user text-info"></i>
                                                                            <strong class="text-capitalize h5">
                                                                                {{duree.annonce.libelle}}
                                                                            </strong> 
                                                                        </li>
                                                                        <li class="form-group">
                                                                            <i class="fa fa-user"></i>
                                                                            <strong class="text-capitalize h5">
                                                                                {{duree.annonce.reference}}
                                                                            </strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <div class="blank-arrow">
                                    <label>Apercu</label>
                                </div>
                                <div class="" style="">
                                    <img width="100%" style="height: 150px" src="web/images/courtage/{{duree.annonce.listMedia[0].fichier}}" class="img-thumbnail img-responsive img-circle">
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="blank-arrow">
                                    <label>Informations</label>
                                </div><br><br><br>
                                <div class="post-meta form-group">
                                    <div ng-switch="duree.annonce.etat_annonce" class="form-group">
                                        <strong ng-switch-when="0" class="text-capitalize h5">
                                            <i class="fa fa-certificate text-info"></i>&nbsp;
                                            En attentes
                                        </strong>
                                        <strong ng-switch-when="1" class="text-capitalize h5">
                                            <i class="fa fa-certificate text-success"></i>&nbsp;
                                            Disponibles
                                        </strong>
                                        <strong ng-switch-when="2" class="text-capitalize h5">
                                            <i class="fa fa-certificate text-danger"></i>&nbsp;
                                            Indisponibles
                                        </strong>
                                    </div>
                                    <ul>
                                        <li class="form-group">
                                            <i class="fa fa-user text-info"></i>
                                            <strong class="text-capitalize h5">
                                                {{duree.annonce.libelle}}
                                            </strong> 
                                        </li>
                                        <li class="form-group">
                                            <i class="fa fa-user"></i>
                                            <strong class="text-capitalize h5">
                                                {{duree.annonce.reference}}
                                            </strong>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-warning">
                    <div class="panel-heading">                        
                        <div class="row">
                            <div class="col-sm-12">
                                <strong class="h2">
                                    Proprietaire
                                </strong>
                                <button data-toggle="modal" data-target="#detailsProprietaire" class="btn btn-warning pull-right">
                                    <i class="fa fa-plus"></i>
                                </button> 
                                <div class="modal fade" id="detailsProprietaire" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">                                
                                            <div class="modal-header get" style="margin-top: 0px">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h1 class="modal-title text-center" id="myModalLabel">
                                                    <i class="fa fa-edit"></i>&nbsp;
                                                    Details
                                                </h1>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row form-group">
                                                    <div class="col-sm-5">
                                                        <div class="blank-arrow">
                                                            <label>Photo</label>
                                                        </div><br><br><br>
                                                        <div class="" style="">
                                                            <img width="150px" src="web/images/courtage/{{duree.annonce.Proprietaire.photo}}" class="img-circle img-thumbnail img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <div class="blank-arrow">
                                                            <label>Informations</label>
                                                        </div><br><br><br>
                                                        <div class="post-meta" style="margin-bottom: 0px">
                                                            <ul>
                                                                <li class="form-group">
                                                                    <i class="fa fa-user"></i>
                                                                    {{duree.annonce.Proprietaire.code}}
                                                                </li>
                                                                <li class="form-group">
                                                                    <i class="fa fa-user"></i>
                                                                    {{duree.annonce.Proprietaire.pseudo}}
                                                                </li>
                                                                <li class="form-group">
                                                                    <i class="fa fa-calendar-o"></i>
                                                                    {{duree.annonce.Proprietaire.monProfil.libelle}}
                                                                </li>
                                                                <li class="form-group">
                                                                    <i class="fa fa-calendar-o"></i>
                                                                    {{duree.annonce.Proprietaire.email}}
                                                                </li>
                                                                <li class="form-group">
                                                                    <i class="fa fa-calendar-o"></i>
                                                                    {{duree.annonce.Proprietaire.tel}}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <div class="blank-arrow">
                                    <label>Photo</label>
                                </div><br><br><br>
                                <div class="" style="">
                                    <img width="150px" src="web/images/courtage/{{duree.annonce.Proprietaire.photo}}" class="img-circle img-thumbnail img-responsive">
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="blank-arrow">
                                    <label>Informations</label>
                                </div><br><br><br>
                                <div class="post-meta" style="margin-bottom: 0px">
                                    <ul>
                                        <li class="form-group">
                                            <i class="fa fa-user"></i>
                                            {{duree.annonce.Proprietaire.code}}
                                        </li>
                                        <li class="form-group">
                                            <i class="fa fa-user"></i>
                                            {{duree.annonce.Proprietaire.pseudo}}
                                        </li>
                                        <li class="form-group">
                                            <i class="fa fa-calendar-o"></i>
                                            {{duree.annonce.Proprietaire.monProfil.libelle}}
                                        </li>
                                        <li class="form-group">
                                            <i class="fa fa-calendar-o"></i>
                                            {{duree.annonce.Proprietaire.email}}
                                        </li>
                                        <li class="form-group">
                                            <i class="fa fa-calendar-o"></i>
                                            {{duree.annonce.Proprietaire.tel}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-warning">
                    <div class="panel-heading">                        
                        <div class="row">
                            <div class="col-sm-12">
                                <strong class="h2">
                                    Commerciale
                                </strong>
                                <button class="btn btn-warning pull-right" data-toggle="modal" data-target="#detailsCommerciale">
                                    <i class="fa fa-plus"></i>
                                </button>             
                                <div class="modal fade" id="detailsCommerciale" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">                                
                                            <div class="modal-header get" style="margin-top: 0px">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h1 class="modal-title text-center" id="myModalLabel">
                                                    <i class="fa fa-edit"></i>&nbsp;
                                                    Details
                                                </h1>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row form-group">
                                                    <div class="col-sm-5">
                                                        <div class="blank-arrow">
                                                            <label>Photo</label>
                                                        </div><br><br><br>
                                                        <div class="" style="">
                                                            <img width="150px" src="web/images/courtage/{{duree.annonce.Proprietaire.photo}}" class="img-circle img-thumbnail img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <div class="blank-arrow">
                                                            <label>Informations</label>
                                                        </div><br><br><br>
                                                        <div class="post-meta" style="margin-bottom: 0px">
                                                            <ul>
                                                                <li class="form-group">
                                                                    <i class="fa fa-user"></i>
                                                                    {{duree.annonce.Proprietaire.code}}
                                                                </li>
                                                                <li class="form-group">
                                                                    <i class="fa fa-user"></i>
                                                                    {{duree.annonce.Proprietaire.pseudo}}
                                                                </li>
                                                                <li class="form-group">
                                                                    <i class="fa fa-calendar-o"></i>
                                                                    {{duree.annonce.Proprietaire.monProfil.libelle}}
                                                                </li>
                                                                <li class="form-group">
                                                                    <i class="fa fa-calendar-o"></i>
                                                                    {{duree.annonce.Proprietaire.email}}
                                                                </li>
                                                                <li class="form-group">
                                                                    <i class="fa fa-calendar-o"></i>
                                                                    {{duree.annonce.Proprietaire.tel}}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row form-group">
                            <div class="col-sm-5">
                                <div class="blank-arrow">
                                    <label>Photo</label>
                                </div><br><br><br>
                                <div class="" style="">
                                    <img width="150px" src="web/images/courtage/{{duree.annonce.Courtier.photo}}" class="img-circle img-thumbnail img-responsive">
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="blank-arrow">
                                    <label>Informations</label>
                                </div><br><br><br>
                                <div class="post-meta" style="margin-bottom: 0px">
                                    <ul>
                                        <li class="form-group">
                                            <i class="fa fa-user"></i>
                                            {{duree.annonce.Courtier.code}}
                                        </li>
                                        <li class="form-group">
                                            <i class="fa fa-user"></i>
                                            {{duree.annonce.Courtier.pseudo}}
                                        </li>
                                        <li class="form-group">
                                            <i class="fa fa-calendar-o"></i>
                                            {{duree.annonce.Courtier.monProfil.libelle}}
                                        </li>
                                        <li class="form-group">
                                            <i class="fa fa-calendar-o"></i>
                                            {{duree.annonce.Courtier.email}}
                                        </li>
                                        <li class="form-group">
                                            <i class="fa fa-calendar-o"></i>
                                            {{duree.annonce.Courtier.tel}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 replay-box" style="margin: 0px">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <strong class="h2">
                            Option Affichage
                        </strong>
                        <button data-toggle="modal" data-target="#detailsAffichage" class="btn btn-warning pull-right">
                            <i class="fa fa-plus"></i>
                        </button> 
                        <div class="modal fade" id="detailsAffichage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">                                
                                    <div class="modal-header get" style="margin-top: 0px">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h1 class="modal-title text-center" id="myModalLabel">
                                            <i class="fa fa-edit"></i>&nbsp;
                                            Details
                                        </h1>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row form-group">
                                            <div class="col-sm-5">
                                                <div class="blank-arrow">
                                                    <label>Photo</label>
                                                </div><br><br><br>
                                                <div class="" style="">
                                                    <img width="150px" src="web/images/courtage/{{duree.annonce.Proprietaire.photo}}" class="img-circle img-thumbnail img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="blank-arrow">
                                                    <label>Informations</label>
                                                </div><br><br><br>
                                                <div class="post-meta" style="margin-bottom: 0px">
                                                    <ul>
                                                        <li class="form-group">
                                                            <i class="fa fa-user"></i>
                                                            {{duree.annonce.Proprietaire.code}}
                                                        </li>
                                                        <li class="form-group">
                                                            <i class="fa fa-user"></i>
                                                            {{duree.annonce.Proprietaire.pseudo}}
                                                        </li>
                                                        <li class="form-group">
                                                            <i class="fa fa-calendar-o"></i>
                                                            {{duree.annonce.Proprietaire.monProfil.libelle}}
                                                        </li>
                                                        <li class="form-group">
                                                            <i class="fa fa-calendar-o"></i>
                                                            {{duree.annonce.Proprietaire.email}}
                                                        </li>
                                                        <li class="form-group">
                                                            <i class="fa fa-calendar-o"></i>
                                                            {{duree.annonce.Proprietaire.tel}}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">                        
                        <div class="row form-group">
                            <div class="col-sm-12 form-group">
                                <div class="blank-arrow">
                                    <label>Nom</label>
                                </div><br><br>
                                <div class="form-control" style="">
                                    {{duree.affichage.lib_affichage}}
                                </div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <div class="blank-arrow">
                                    <label>Apercu</label>
                                </div><br><br>
                                <div class="" style="">
                                    <img width="100%" height="150px" src="web/images/affichage/{{duree.affichage.image}}" class="thumbnail img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <strong class="h2">
                            Demande d'affichage
                        </strong>
                    </div>
                    <div class="panel-body">                        
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <div class="blank-arrow">
                                    <label>Date demande</label>
                                </div><br><br>
                                <div class="form-control" style="box-shadow: 1px 1px 1px grey">
                                    {{duree.date_demande}}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="blank-arrow">
                                    <label>Etat demande</label>
                                </div><br><br>
                                <div class="form-control" style="box-shadow: 1px 1px 1px grey">
                                    <!--{{duree.etat}}-->
                                    <strong ng-if="duree.etat == 0">En entente</strong>
                                    <strong ng-if="duree.etat == 1">Valider</strong>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <div class="blank-arrow">
                                    <label>Date debut</label>
                                </div><br><br>
                                <div class="form-control" style="box-shadow: 1px 1px 1px grey">
                                    {{duree.date_debut_duree}}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="blank-arrow">
                                    <label>Date fin</label>
                                </div><br><br>
                                <div class="form-control" style="box-shadow: 1px 1px 1px grey">
                                    {{duree.date_fin_duree}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <strong class="h2">
                            Operation
                        </strong>
                    </div>
                    <div class="panel-body">                        
                        <div class="row form-group">
                            <div class="col-sm-12" ng-if="duree.etat == 0">
                                <div class="form-control" style="box-shadow: 1px 1px 1px grey">
                                    <button ng-click="valider()" class="btn btn-success form-control" type="button">
                                        <i class="fa fa-check"></i>&nbsp;
                                        Valider
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-12" ng-if="duree.etat == 1">
                                <div class="form-control" style="box-shadow: 1px 1px 1px grey">
                                    <button ng-click="bloquer()" class="btn btn-danger form-control" type="button">
                                        <i class="fa fa-times"></i>&nbsp;
                                        Bloquer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                include_once '../partials/alertMess.php';
                ?>
            </div>
        </div>
    </div>
</div>
