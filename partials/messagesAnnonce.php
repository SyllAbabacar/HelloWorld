<?php
include_once '../services/Session.php';
Session::initSession();
?>
<div class="col-sm-9">
    <div class="alert alert-warning">
        <div class="row">
            <?php if (Session::getIdProfil() != 5): ?>
                <div class="col-sm-4">
                    <a href="#/listAnnonce/{{listMessage[0].annonce.Proprietaire.id_membre}}" title="Retour">
                        <i class="fa fa-reply-all fa-2x"></i>
                    </a>
                    <a href="" class="btn btn-info get" style="margin: 0px;">
                        <i class="fa fa-plus-square-o"></i>&nbsp;Nouveau message
                    </a>
                </div>
            <?php endif; ?>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-3 h5">
                        Etat message :
                    </div>
                    <div class="col-sm-3">
                        <select class="form-control" ng-model="select_etat_message">
                            <option value="-1">Tout</option>
                            <option value="0">Non lu</option>
                            <option value="1">Lu</option>
                        </select>
                    </div>
                    <div class="col-sm-3 h5">
                        Type message :
                    </div>
                    <div class="col-sm-3">
                        <select class="form-control" ng-model="select_type_message">
                            <option value="-1">Tout</option>
                            <option value="{{obj.id_type_message}}" ng-repeat="obj in listTypeMess">{{obj.libelle}}</option>
                        </select>
                        <!--{{select_type_message}}-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span class="">
        <i class="fa fa-certificate text-danger"></i>&nbsp;Message non lu
    </span>
    <span>
        <i class="fa fa-certificate text-success"></i>&nbsp;Message lu
    </span>
    <div class="table-responsive cart_info">
        <div style="color: #FE980F">
            <h3 class="black_title text-center" style="margin-bottom: 0px;">
                <i class="fa fa-list"></i>&nbsp;
                Liste Message
            </h3>
        </div>
        <table class="table table-hover text-center">
            <thead class="get">
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Reference</th>
                    <th class="text-center">Nom</th>
                    <th class="text-center">Objet</th>
                    <th class="text-center">Date</th>
                    <th class="text-center">Etat</th>
                    <th class="text-center">Option</th>
                </tr>
            </thead>
            <tbody>
                <tr 
                    ng-repeat="obj in listMessage" 
                    ng-if="(select_etat_message == obj.etat ||
                                                select_etat_message == null ||
                                                select_etat_message == -1) &&
                                                (select_type_message == obj.id_type_message ||
                                                        select_type_message == null ||
                                                        select_type_message == -1)
                    ">
                    <td class="">
                        {{$index + 1}}
                    </td>
                    <td>
                        {{obj.annonce.reference}}
                    </td>
                    <td>
                        {{obj.nom}}
                    </td>
                    <td class="">
                        {{obj.objet_message}}
                    </td>
                    <td class="">
                        {{obj.date_message}}
                    </td>
                    <td class="">
                        <!--{{obj.etat}}-->
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
                        <a class="btn" href="#/detailMessage/{{obj.id_message}}" title="Voir Details">
                            <i class="fa fa-eye"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
