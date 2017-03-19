<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../services/Session.php';
Session::initSession();
?>
<div class="col-sm-9">
    <div class="alert alert-warning">
        <div class="row">
            <div class="col-sm-8">
                <div class="" style="margin: 0px">
                    <div class="row">
                        <div class="col-sm-4 h4">
                            Etat demande:
                        </div>
                        <div class="col-sm-8">
                            <select class="form-control" ng-model="select_etat">
                                <option value="-1" ng-selected="-1">Tout</option>
                                <option value="0">En attente</option>
                                <option value="1">Valide</option>
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
            <i class="fa fa-certificate text-danger"></i>&nbsp;En attente
        </span>
        <span>
            <i class="fa fa-certificate text-success"></i>&nbsp;Valider
        </span>
        <div style="color: #FE980F">
            <h3 class="black_title text-center" style="margin-bottom: 0px;">
                <i class="fa fa-list"></i>
                Liste demande d'affichage
                <span ng-switch="select_etat">
                    <span ng-switch-when="0">
                        en attentes
                    </span>
                    <span ng-switch-when="1">
                        valider
                    </span>
                </span>
            </h3>
        </div>
        <table class="table table-hover text-center" style="">
            <thead>
                <tr class="cart_menu get">
                    <th class="text-center">#</th>
                    <th class="text-center">Ref. Annonce</th>
                    <th class="text-center">Option affichage</th>
                    <th class="text-center">Date de debut</th>
                    <th class="text-center">Date de fin</th>
                    <th class="text-center">Etat</th>
                    <th class="text-center">Option</th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="obj in listeAnnonces" ng-if="(obj.etat === select_etat || select_etat == null || select_etat == -1)">
                    <td class="">
                        {{$index + 1}}
                    </td>
                    <td>
                        {{obj.annonce.reference}}
                    </td>
                    <td class="">
                        <p>{{obj.affichage.lib_affichage}}</p>
                    </td>
                    <td class="">
                        {{obj.date_debut_duree}}
                    </td>
                    <td class="">
                        {{obj.date_fin_duree}}
                    </td>
                    <td class="">
                        <span ng-switch="obj.etat">
                            <span ng-switch-when="0">
                                <i class="fa fa-certificate text-danger"></i>
                            </span>
                            <span ng-switch-when="1">
                                <i class="fa fa-certificate text-success"></i>
                            </span>
                        </span>
                    </td>
                    <td class="">
                        <a class="btn" href="#/detailDemandeOA/{{obj.id_duree}}" title="Voir Details">
                            <i class="fa fa-eye"></i>
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