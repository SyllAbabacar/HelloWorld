<div class="col-sm-9 col-lg-9 col-md-9 fadeInLeftBig animated">
    <div class="panel" style="box-shadow: 1px 3px 3px gray;"><!--login form-->
        <div class="panel-heading get" style="margin-top: 0px">
            <h2 class="text-center">
                <i class="fa fa-flag-checkered"></i>&nbsp;
                Promouvoire votre annonce
            </h2>
        </div>
        <form action="">
            <div class="panel-body">
                <div class="row form-group">
                    <div class="col-sm-6">
                        <div class="form-group panel panel-yellow rounded">
                            <div class="col-sm-4 panel-heading rounded">
                                <label class="text-center panel-title">Reference :</label>
                            </div>
                            <div class="panel-body col-sm-8">
                                {{annonce.reference}}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group panel panel-yellow rounded">
                            <div class="col-sm-4 panel-heading rounded">
                                <label class="text-center panel-title">Libelle :</label>
                            </div>
                            <div class="col-sm-8 panel-body">
                                {{annonce.libelle}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-12">
                        <div class="form-group panel panel-yellow rounded">
                            <div class="panel-heading rounded">
                                <label class="panel-title">Description :</label>
                            </div>
                            <div class="panel-body">
                                {{annonce.description}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--{{listAffichage}}-->
                <div class="black_title" style="color: #FE980F">
                    <label class="h4">Zone d'affichage:</label>
                    <select ng-model="zoneAff" required ng-change="getAffById(zoneAff)">
                        <option value="{{obj.id_affichage}}" ng-repeat="obj in listAffichage">
                            {{obj.lib_affichage}}
                        </option>
                    </select>
                </div>
                <div class="" ng-if="zoneAff != null">
                    <div class="row form-group">
                        <div class="col-sm-12">
                            <div class="form-group panel panel-warning rounded">
                                <div class="panel-heading rounded">
                                    <label class="panel-title">Description :</label>
                                </div>
                                <div class="panel-body">
                                    <div class="col-sm-9 text-justify">
                                        {{affichage.description}}
                                    </div>
                                    <div class="col-sm-3 image img-thumbnail">
                                        <img class="img-responsive" src="web/images/affichage/{{affichage.image}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-6">
                            <div class="form-group panel panel-warning rounded">
                                <div class="panel-heading rounded">
                                    <label class="panel-title">Forfait :</label>
                                </div>
                                <div class="panel-body">
                                    {{affichage.forfait}}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group panel panel-warning rounded">
                                <div class="panel-heading rounded">
                                    <label class="panel-title">Condition de vente :</label>
                                </div>
                                <div class="panel-body">
                                    {{affichage.condition_de_vente}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <i class="fa fa-calendar-o"></i>&nbsp;Date Debut
                            <input type="date" ng-model="datedeb" class="form-control" required/>
                        </div>
                        <!--{{datedeb}}-->
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <i class="fa fa-calendar-o"></i>&nbsp;Date Fin
                            <input type="date" ng-model="datefin" class="form-control" required/>
                        </div>
                        <!--{{datefin}}-->
                    </div>
                </div>
                <?php
                include_once '../partials/alertMess.php';
                ?>
            </div>
            <div class="panel-footer get" style="margin: 0px">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3">
                            <button type="submit" ng-click="promouvoire()" class="btn btn-success form-control">
                                <i class="fa fa-star-half-empty"></i>&nbsp;
                                Soumettre
                            </button>
                        </div>
                        <div class="col-sm-3">
                            <button type="reset" class="btn btn-danger form-control">
                                <i class="fa fa-times"></i>&nbsp;
                                Annuler
                            </button>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
