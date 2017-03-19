<div class="col-sm-9">
    <section id="slider" ng-controller="annoncesCtrl" ><!--slider-->
        <div class="" ng-controller="slideCtrl">
            <div class="row">
                <div class="col-sm-12 col-lg-12 col-md-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li ng-if="$index == 0" ng-repeat="obj in listDuree| limitTo: 5" data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li ng-if="$index == 1" ng-repeat="obj in listDuree| limitTo: 5" data-target="#slider-carousel" data-slide-to="1"></li>
                            <li ng-if="$index == 2" ng-repeat="obj in listDuree| limitTo: 5" data-target="#slider-carousel" data-slide-to="2"></li>
                            <li ng-if="$index == 3" ng-repeat="obj in listDuree| limitTo: 5" data-target="#slider-carousel" data-slide-to="3"></li>
                            <li ng-if="$index == 4" ng-repeat="obj in listDuree| limitTo: 5" data-target="#slider-carousel" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active" ng-if="$index == 0" ng-repeat="obj in listDuree| limitTo: 5">
                                <div class="col-sm-6 col-lg-6 col-md-6">
                                    <h1>
                                        <span>
                                            <!--<i class="fa fa-angle-left"></i>-->
                                            {{obj.annonce.typeAnnonce.activite.lib_activite}}
                                        </span>
                                        {{obj.annonce.typeAnnonce.libelle}}
                                    </h1>
                                    <h2>{{obj.annonce.libelle}}</h2>
                                    <p>{{obj.annonce.description}}</p>
                                    <a href="#/detailAnnonce/{{obj.annonce.id_annonce}}" class="btn btn-warning get rounded">
                                        <i class="fa fa-eye"></i> Voir details ...
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-6 col-md-6">
                                    <img src="web/images/courtage/{{obj.annonce.listMedia[0].fichier}}" alt="" class="" style="height: 350px; width: 300px;"/>
                                    <!--<img src="web/images/home/pricing.png"  class="pricing" alt="" />-->
                                </div>
                            </div>

                            <div class="item" ng-if="$index > 0" ng-repeat="obj in listDuree| limitTo: 5">
                                <div class="col-sm-6 col-lg-6 col-md-6">
                                    <h1>
                                        <span>
                                            {{obj.annonce.typeAnnonce.activite.lib_activite}}
                                        </span>
                                        {{obj.annonce.typeAnnonce.libelle}}
                                    </h1>
                                    <h2>{{obj.annonce.libelle}}</h2>
                                    <p>{{obj.annonce.description}}</p>
                                    <a href="#/detailAnnonce/{{obj.annonce.id_annonce}}" class="btn btn-warning get rounded">
                                        <i class="fa fa-eye"></i> Voir details ...
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-6 col-md-6">
                                    <img src="" class="girl img-responsive" alt="" />
                                    <img src="web/images/courtage/{{obj.annonce.listMedia[0].fichier}}" alt="" height="400px" width="400px"/>
                                    <!--<img src="web/images/home/pricing.png"  class="pricing" alt="" />-->
                                </div>
                            </div>
                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/slider-->
    <!--Annonce Pro-->
    <div class="category-tab" ng-controller="annonceProCtrl">
        <div ng-controller="activiteCtrl">
            <h2 class="title text-center black_title" style="margin-bottom: 0px">
                Annonce Pro
            </h2>
            <div class="col-sm-12">
                <ul class="nav nav-tabs black_title">
                    <li class="active">
                        <a href="#/accueil" data-toggle="tab">Tous les activites</a>
                    </li>
                    <li ng-repeat="obj in listActivite">
                        <a href="#/accueil/act/{{obj.id_activite}}" data-toggle="tab">{{obj.lib_activite}}</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div >
                    <div class="col-sm-3" ng-repeat="obj in listDureeAPro| limitTo: 8">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="web/images/courtage/{{obj.annonce.listMedia[0].fichier}}" width="100%" height="100px" alt="" />
                                    <h2>{{obj.annonce.montant}} F cfa</h2>
                                    <p>{{obj.annonce.libelle}}</p>
                                    <a href="#/detailAnnonce/{{obj.annonce.id_annonce}}" class="btn btn-default add-to-cart">
                                        <i class="fa fa-eye"></i>Voire Details ...
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3" ng-repeat="obj in listDuree| limitTo: 8">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="web/images/courtage/{{obj.annonce.listMedia[0].fichier}}" width="100%" height="100px" alt="" />
                                    <h2>{{obj.annonce.montant}}</h2>
                                    <p>{{obj.annonce.libelle}}</p>
                                    <a href="#/detailAnnonce/{{obj.annonce.id_annonce}}" class="btn btn-default add-to-cart">
                                        <i class="fa fa-shopping-cart"></i>Voire details ...
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Annonce Pro-->
    <!--Dernières Publications-->
    <div class="features_items" ng-controller="pageAccueilCtrl">
        <h2 class="title text-center black_title">
            Dernières Publications
        </h2>
        <div class="col-sm-4" ng-repeat="obj in listDuree| orderBy : 'date_creation' : true | limitTo : 12">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="web/images/courtage/{{obj.annonce.listMedia[0].fichier}}" width="100%" height="250px" />
                        <h2>{{obj.annonce.montant}} F cfa</h2>
                        <p>{{obj.annonce.libelle}} : {{obj.annonce.typeAnnonce.libelle}}</p>
                        <a href="#/detailAnnonce/{{obj.annonce.id_annonce}}" class="btn btn-default add-to-cart">
                            <i class="fa fa-eye"></i>Voir les details
                        </a>
                    </div>
                    <div class="product-overlay">
                        <div class="overlay-content">
                            <h2>{{obj.annonce.montant}} F cfa</h2>
                            <p>{{obj.annonce.libelle}}</p>
                            <a href="#/detailAnnonce/{{obj.annonce.id_annonce}}" class="btn btn-default add-to-cart">
                                <i class="fa fa-eye"></i>Voir les details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Dernières Publications-->

    <!--Recommendation-->
    <div class="recommended_items" ng-controller="recommendationCtrl">
        <h2 class="title text-center black_title">
            Recommandations
        </h2>
        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">	
                    <div class="col-sm-4" ng-repeat="obj in listDuree| limitTo: 3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="web/images/courtage/{{obj.annonce.listMedia[0].fichier}}" alt="" height="150px"/>
                                    <h2>{{obj.annonce.montant}} F cfa</h2>
                                    <p>{{obj.annonce.libelle}}</p>
                                    <a href="#/detailAnnonce/{{obj.annonce.id_annonce}}" class="btn btn-default add-to-cart">
                                        <i class="fa fa-eye"></i>Voir details ...
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Recommendation-->
</div>
