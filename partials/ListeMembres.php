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
    <div class="alert alert-warning box_grey rounded">
        <!--{{listProfils}}-->
        <div class="row">
            <div class="col-sm-4">
                <span class="">
                    <a href="#/newUser" class="btn btn-warning get rounded" style="margin: 0px;">
                        <i class="fa fa-plus-circle"></i>&nbsp;Nouveau utilisateur
                    </a>
                </span>
            </div>
            <div class="col-sm-8">
                <div class="" style="margin: 0px">
                    <div class="row">
                        <div class="col-sm-2 h4 text-right">
                            Profil :
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control rounded" ng-model="select_profil">
                                <option value="-1" ng-selected="-1">Tout</option>
                                <option value="{{obj.id_profile}}" ng-repeat="obj in listProfils">{{obj.libelle}}</option>
                            </select>
                            <!--{{select_profil}}-->
                        </div>
                        <div class="col-sm-2 h4 text-right">
                            Etat :
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control rounded" ng-model="select_etat">
                                <option value="-1" ng-selected="-1">Tout</option>
                                <option value="0">En attente</option>
                                <option value="1">Activer</option>
                                <option value="3" ng-if="select_profil == 1 || select_profil == null || select_profil == -1">Demande Pro</option>
                                <option value="2">Desactiver</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--{{listMembre[0]}}-->
    <div class="table-responsive cart_info">
        <span>
            <i class="fa fa-certificate  text-warning"></i>&nbsp;En attente&emsp;
        </span>
        <span>
            <i class="fa fa-certificate text-success"></i>&nbsp;Activer&emsp;
        </span>
        <span>
            <i class="fa fa-certificate text-info"></i>&nbsp;Demande Pro&emsp;
        </span>
        <span>
            <i class="fa fa-certificate text-danger"></i>&nbsp;Desactiver&emsp;
        </span>
        <div style="color: #FE980F">
            <h3 class="black_title text-center" style="margin-bottom: 0px;">
                <i class="fa fa-list"></i>
                Liste
                <span ng-switch="select_profil">
                    <span ng-switch-when="1">
                        Membre Simple
                    </span>
                    <span ng-switch-when="2">
                        Commercial
                    </span>
                    <span ng-switch-when="3">
                        Membre Pro
                    </span>
                    <span ng-switch-when="4">
                        Superviseur
                    </span>
                    <span ng-switch-when="5">
                        Administrateur
                    </span>
                    <span ng-switch-default>
                        membre
                    </span>
                </span>
                <span ng-switch="select_etat">
                    <span ng-switch-when="0">
                        en attentes
                    </span>
                    <span ng-switch-when="1">
                        activer
                    </span>
                    <span ng-switch-when="3">
                        voulant devenir membre pro
                    </span>
                    <span ng-switch-when="2">
                        desactiver
                    </span>
                </span>
            </h3>
        </div>
        <table class="table table-hover text-center box_grey" style="border: 1px solid #FE980F;">
            <thead>
                <tr class="cart_menu get">
                    <th class="text-center">Photo</th>
                    <th class="text-center">Code</th>
                    <th class="text-center">Pseudo</th>
                    <th class="text-center">Nom</th>
                    <th class="text-center">Prenom</th>
                    <th class="text-center">Etat</th>
                    <th class="text-center">Option</th>
                </tr>
            </thead>
            <!--{{listMembre[0]}}-->
            <tbody>
                <tr ng-repeat="obj in listMembre" ng-if="(obj.etat_membre === select_etat || select_etat == null || select_etat == -1) && (obj.profil == select_profil || select_profil == null || select_profil == -1)">
                    <td class="">
                        <img class="img-responsive" style="height: 50px; width: 50px" src="web/images/courtage/{{obj.photo}}">
                    </td>
                    <td class="">
                        {{obj.code}}
                    </td>
                    <td class="">
                        {{obj.pseudo}}
                    </td>
                    <td class="">
                        {{obj.nom}}
                    </td>
                    <td class="">
                        {{obj.prenom}}
                    </td>
                    <td class="">
                        <span ng-switch="obj.etat_membre">
                            <span ng-switch-when="0">
                                <i class="fa fa-certificate text-warning"></i>
                            </span>
                            <span ng-switch-when="1">
                                <i class="fa fa-certificate text-success"></i>
                            </span>
                            <span ng-switch-when="2">
                                <i class="fa fa-certificate text-danger"></i>
                            </span>
                            <span ng-switch-when="3">
                                <i class="fa fa-certificate text-info"></i>
                            </span>
                        </span>
                    </td>
                    <td class="">
                        <!--data-target="#detailMembre" data-toggle="modal"-->
                        <a class="btn" href="#/detailMembre/{{obj.id_membre}}" title="Voir Details">
                            <i class="fa fa-eye"></i>
                        </a>

                        <div class="modal fade" id="detailMembre" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">                                
                                    <div class="modal-header get" style="margin-top: 0px">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h1 class="modal-title" id="myModalLabel">
                                            <i class="fa fa-question-circle"></i>&emsp;
                                            Details
                                        </h1>
                                    </div>
                                    <div class="modal-body h3">
                                        {{obj.prenom}}
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
