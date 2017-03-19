<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../services/Session.php';
Session::initSession();
//var_dump($_SESSION);
?>
<!--{{listeAnnonces}}-->
<div class="col-sm-9 fadeInLeftBig animated">
    <div class="alert alert-warning">
        <div class="row">
            <div class="col-sm-4">
                <span class="">
                    <a href="#/AnnonceBouBess" class="btn btn-info get" style="margin: 0px;">
                        <i class="fa fa-plus-square-o"></i>&nbsp;Nouveau annonce
                    </a>
                </span>
            </div>
            <div class="col-sm-8">
                <div class="" style="margin: 0px">
                    <div class="row">
                        <div class="col-sm-4 h4 text-right">
                            Option de tri :
                        </div>
                        <div class="col-sm-8">
                            <select class="form-control" ng-model="select_etat">
                                <option value="-1" ng-selected="-1">Tout</option>
                                <option value="0">En attente</option>
                                <!--<option value="publier">Publier</option>-->
                                <optgroup label="Publier">
                                    <option value="1">Disponible</option>
                                    <option value="2">Indisponible</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--{{select_etat}}-->
    <div class="table-responsive cart_info">
        <span>
            <i class="fa fa-circle text-warning"></i>&nbsp;En attente
        </span>
        <span>
            <i class="fa fa-circle text-success"></i>&nbsp;Disponible
        </span>
        <span>
            <i class="fa fa-circle text-danger"></i>&nbsp;Indisponible
        </span>
        <div style="color: #FE980F">
            <h3 class="black_title text-center" style="margin-bottom: 0px;">
                <i class="fa fa-list"></i>
                Liste annonces
                <span ng-switch="select_etat">
                    <span ng-switch-when="0">
                        en attentes
                    </span>
                    <span ng-switch-when="1">
                        disponibles
                    </span>
                    <span ng-switch-when="2">
                        indisponibles
                    </span>
                </span>
            </h3>
        </div>
        <table class="table table-hover text-center" style="">
            <thead>
                <tr class="cart_menu get">
                    <th class="text-center">Photo</th>
                    <th class="text-center">Reference</th>
                    <th class="text-center">Libelle</th>
                    <th class="text-center">Date</th>
                    <th class="text-center">Etat</th>
                    <th class="text-center">Option</th>
                </tr>
            </thead>
            <!--{{listeAnnonces}}-->
            <tbody>
                <!--ng-if="obj.etat_annonce != 3 && obj.etat_annonce != 0"-->
                <tr ng-repeat="obj in listeAnnonces" ng-if="obj.etat_annonce != 3 && (obj.etat_annonce === select_etat || select_etat == null || select_etat == -1)">
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
                                <i class="fa fa-circle text-warning"></i>
                            </span>
                            <span ng-switch-when="1">
                                <i class="fa fa-circle text-success"></i>
                            </span>
                            <span ng-switch-when="2">
                                <i class="fa fa-circle text-danger"></i>
                            </span>
                        </span>
                    </td>
                    <td class="">
                        <a class="btn" href="#/detailAnnonce/{{obj.id_annonce}}" title="Voir Details">
                            <i class="fa fa-eye"></i>
                        </a>
                        <!--data-toggle="modal" data-target="#messAnn"--> 
                        <a class="btn" href="#/messagesAnn/{{obj.id_annonce}}" title="Messages">
                            <i class="fa fa-envelope-o text-primary"></i>
                        </a>
                        <a class="btn" href="" title="Supprimer" data-toggle="modal" data-target="#suppAnn">
                            <i class="fa fa-times-circle text-danger"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="modal fade" id="suppAnn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">                                
                    <div class="modal-header get" style="margin-top: 0px">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h1 class="modal-title" id="myModalLabel">
                            <i class="fa fa-question-circle"></i>&emsp;
                            Confirmation
                        </h1>
                    </div>
                    <div class="modal-body h3">
                        Voulez vous vraiment suprimer cette annonce?
                    </div>
                    <div class="modal-footer get">
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="#/suppAnn" class="btn btn-success form-control">
                                    <i class="fa fa-check"></i>&emsp;
                                    Oui
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-danger form-control" class="close" data-dismiss="modal" aria-hidden="true">
                                    <i class="fa fa-times"></i>&emsp;
                                    Non
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
