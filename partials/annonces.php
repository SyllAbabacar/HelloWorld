<div class="col-sm-9 padding-right fadeInLeftBig animated">
    <div class="features_items" ng-controller="activiteCtrl"><!--features_items-->
        <h2 class="title text-center">Liste des annonces</h2>
        <div class="col-sm-4" ng-repeat="obj in listeAnnonces" ng-if="obj.etat_annonce != 3 && obj.etat_annonce != 0">
            <!--{{obj.typeAnnonce.id_type_annonce}}-->
            <div class="product-image-wrapper" style="box-shadow: 5px 1px 3px #fe980f">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="web/images/courtage/{{obj.listMedia[0].fichier}}" class="" width="100%" height="250px" />
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
        <!--        <ul class="pagination">
                    <li class="active"><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">»</a></li>
                </ul>-->
    </div><!--features_items-->
</div>