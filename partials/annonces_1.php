<div class="col-sm-9">
    <div class="features_items" ng-controller="activiteCtrl"><!--features_items-->
        <h2 class="title text-center">
            Option de trie
        </h2>
        <fieldset class="text-center alert bg-warning rounded">
            <div class="row">
                <div class="col-sm-4">
                    <label class="text-left label label-default">Activite :</label>
                    <select class="rounded form-control" ng-model="select_act">
                        <option value="-1">Tout</option>
                        <option ng-value="{{obj.id_activite}}" ng-repeat="obj in listActivite">
                            {{obj.lib_activite}}
                        </option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label class="text-left label label-warning">Type Annonce :</label>
                    <select class="rounded form-control" ng-model="select_typAnn">
                        <option value="-1">Tout</option>
                        <option ng-value="{{obj.id_type_annonce}}" ng-if="obj.id_activite == select_act || select_act == - 1" ng-repeat="obj in listTypeAnnonce">
                            {{obj.libelle}}
                        </option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label class="text-left label label-primary">Transaction :</label>
                    <select class="rounded form-control" ng-model="select_transaction">
                        <option value="-1">Tout</option>
                        <option ng-value="1">
                            Vente
                        </option>
                        <option ng-value="0">
                            Location
                        </option>
                    </select>
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-4">
                    <label class="text-left label label-danger">Pays :</label>
                    <select class="rounded form-control" ng-model="select_pays">
                        <option value="-1">Tout</option>
                        <option ng-value="{{obj.id_pays}}" ng-repeat="obj in listPays">
                            {{obj.nom}}
                        </option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label class="text-left label label-info">Region :</label>
                    <select class="rounded form-control" ng-model="select_region">
                        <option value="-1">Tout</option>
                        <option ng-value="{{obj.id_region}}" ng-repeat="obj in listRegion" ng-if="obj.id_pays == select_pays || select_pays == - 1">
                            {{obj.nom}}
                        </option>
                    </select>
                </div>
                <div class="col-sm-4" ng-disabled="select_region">
                    <label class="text-left label label-success">Localite :</label>
                    <select class="rounded form-control" ng-model="select_loc">
                        <option value="-1">Tout</option>
                        <option ng-value="{{obj.id_localite}}" ng-if="obj.id_region == select_region || select_region == - 1"  ng-repeat="obj in listLocalite">
                            {{obj.nom}}
                        </option>
                    </select>
                </div>
            </div>
        </fieldset>
        <h2 class="title text-center">Liste des annonces</h2>
        <div class="col-sm-4" ng-repeat="obj in listeAnnonces" ng-if="(obj.etat_annonce != 0 && obj.etat_annonce != 3) && (
                    (select_act == null || select_act == - 1 || obj.typeAnnonce.id_activite == select_act) &&
                    (select_typAnn == null || select_typAnn == - 1 || obj.typeAnnonce.id_type_annonce == select_typAnn) &&
                    (select_transaction == null || select_transaction == - 1 || obj.transaction == select_transaction) &&
                    (select_pays == null || select_pays == - 1 || obj.localite.region.id_pays == select_pays) &&
                    (select_region == null || select_region == - 1 || obj.localite.id_region == select_region) &&
                    (select_loc == null || select_loc == - 1 || obj.localite.id_localite == select_loc)
                    )
             ">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="web/images/courtage/{{obj.listMedia[0].fichier}}" width="100%" height="250px" />
                        <h2>{{obj.montant}} F cfa</h2>
                        <p class="h1">{{obj.libelle}}</p>
                        <a href="#" class="btn btn-default add-to-cart">
                            <i class="fa fa-eye"></i>Voir les details
                        </a>
                    </div>
                    <div class="product-overlay">
                        <div class="overlay-content">
                            <h2>{{obj.montant}} F cfa</h2>
                            <p>{{obj.libelle}}</p>
                            <a href="#/detailAnnonce/{{obj.id_annonce}}" class="btn btn-default add-to-cart">
                                <i class="fa fa-eye"></i>Voir les details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <span class="alert alert-danger col-sm-12 text-center" ng-if="listeAnnonces.length == 0">
            Aucun resultat trouvé !!! 
        </span>

        <ul class="pagination">
            <li class="active"><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">»</a></li>
        </ul>
    </div><!--features_items-->
</div>