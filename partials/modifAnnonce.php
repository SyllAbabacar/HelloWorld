<?php
include_once '../models/IAnnonceImpl.php';
?>
<div class="col-sm-9">
    <h2 class="title text-center">Modifier annonce</h2>
    <?= include 'alertMess.php'; ?>
    <div class="panel" style="box-shadow: 1px 3px 3px gray;"><!--login form-->
        <div class="panel-heading get" style="margin-top: 0px;">
            <h2 class="text-center">
                <i class="fa fa-edit"></i>&nbsp;
                Modifier l'annonce
            </h2>
        </div>
        <form action="" ng-submit="updateAnnonce()">
            <div class="panel-body">
                <div class="row">
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
                <div class="row">
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
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <label>Adresse :</label>
                        <input type="text" ng-model="adresse" placeholder="Adresse" class="form-control" />
                    </div>
                </div>
                <div class="row">
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
            </div>
            <div class="panel-footer get" style="margin-top: 0px;">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-check"></i>&nbsp;Modifier
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
