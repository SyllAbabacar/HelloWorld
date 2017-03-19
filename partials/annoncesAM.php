<?php
include_once '../models/IAnnonceImpl.php';
?>
<div class="col-sm-9 fadeInLeftBig animated">
    <h2 class="title text-center">
        Gerer vos annonces
    </h2>
    <div class="panel" style="box-shadow: 1px 3px 3px gray;"><!--login form-->
        <div class="panel-heading get" style="margin-top: 0px;">
            <h2 class="text-center">
                <i class="fa fa-tags"></i>&nbsp;
                Nouvelle annonce
            </h2>
        </div>
        <form action="">
            <div class="panel-body replay-box" style="margin: 0px">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Matricule :</label>
                            </div>
                            <span>
                                <i class="fa fa-question-circle text-button text-info" title="Laisser ce champs vide si aucun commercial ne traite votre annonce"></i>
                            </span>
                            <input type="text" ng-model="matricule" placeholder="matricule du commercial traitant" class="rounded form-control box_orange" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Activite :</label>
                            </div>
                            <span>*</span>
                            <select ng-model="selected_activite" class="rounded form-control box_orange">
                                <option ng-repeat="obj in listActivite" ng-value="{{obj.id_activite}}" >{{obj.lib_activite}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Type Annonce :</label>
                            </div>
                            <span>*</span>
                            <select required ng-model="selected_typeannonce" class="rounded form-control box_orange">
                                <option ng-if="obj.id_activite == selected_activite" value="{{obj.id_type_annonce}}" ng-repeat="obj in listTypeAnnonce">
                                    {{obj.libelle}}
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Pays :</label>
                            </div>
                            <span>*</span>
                            <select class="rounded form-control box_orange" ng-model="select_pays">
                                <option ng-value="{{obj.id_pays}}" ng-repeat="obj in listPays">
                                    {{obj.nom}}
                                </option>
                            </select>
                        </div>       
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Region :</label>
                            </div>
                            <span>*</span>
                            <select class="rounded form-control box_orange" ng-model="select_region">
                                <option ng-value="{{obj.id_region}}" ng-repeat="obj in listRegion" ng-if="obj.id_pays == select_pays">
                                    {{obj.nom}}
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Localite :</label>
                            </div>
                            <span>*</span>
                            <select ng-model="selected_localite" class="rounded form-control box_orange">
                                <option value="{{obj.id_localite}}" ng-repeat="obj in listLocalite" ng-if="select_region == obj.id_region">
                                    {{obj.nom}}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Transaction :</label>
                            </div>
                            <span>*</span>
                            <select ng-model="selected_transaction" class="rounded form-control box_orange">
                                <option value="1">Vente</option>
                                <option value="0">Location</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="blank-arrow">
                        <label>Adresse :</label>
                    </div>
                    <span>*</span>
                    <input type="text" ng-model="adresse" placeholder="Adresse" class="rounded form-control box_orange" />
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Libelle :</label>
                            </div>
                            <span>*</span>
                            <input type="text" ng-model="libelle" placeholder="Libelle" class="rounded form-control box_orange" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Montant :</label>
                            </div>
                            <span>*</span>
                            <input type="number" ng-model="montant" placeholder="Montant" class="rounded form-control box_orange" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="blank-arrow">
                        <label>Description :</label>
                    </div>
                    <span>*</span>
                    <textarea rows="5" ng-model="description" placeholder="Description" class="rounded form-control box_orange"></textarea>
                </div>
                <div class="row">
                    <div class="col-sm-12" ng-if="msg != ''">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>NB :</label>
                            </div><br><br>
                            <div class="box_orange alert alert-success rounded text-center">
                                {{msg}}
                                <!--{{donnee}}-->
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12" ng-if="erreur != ''">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>NB :</label>
                            </div><br><br>
                            <div class="box_orange alert alert-danger text-center rounded">
                                {{erreur}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer get" style="margin: 0px">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-3">
                            <button type="submit" ng-click="saveAnnonce()" class="rounded btn btn-success form-control box_orange">
                                Suivant <i class="fa fa-arrow-circle-o-right"></i>
                            </button>
                        </div>
                        <div class="col-sm-3">
                            <button type="reset" class="rounded btn btn-danger form-control box_orange">
                                <i class="fa fa-times"></i>&nbsp;
                                Annuler
                            </button>
                        </div>
                        <div class="col-sm-3">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div><!--/login form-->
</div>
