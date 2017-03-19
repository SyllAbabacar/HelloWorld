<section id="slider" ng-controller="annoncesCtrl" ><!--slider-->
    <div class="container" ng-controller="slideCtrl">
        <!--{{listDuree}}-->
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li ng-if="$index == 0" ng-repeat="obj in listDuree" data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li ng-if="$index == 1" ng-repeat="obj in listDuree" data-target="#slider-carousel" data-slide-to="1"></li>
                        <li ng-if="$index == 2" ng-repeat="obj in listDuree" data-target="#slider-carousel" data-slide-to="2"></li>
                        <li ng-if="$index == 3" ng-repeat="obj in listDuree" data-target="#slider-carousel" data-slide-to="3"></li>
                        <li ng-if="$index == 4" ng-repeat="obj in listDuree" data-target="#slider-carousel" data-slide-to="4"></li>
                        <li ng-if="$index == 5" ng-repeat="obj in listDuree" data-target="#slider-carousel" data-slide-to="5"></li>
                        <li ng-if="$index == 6" ng-repeat="obj in listDuree" data-target="#slider-carousel" data-slide-to="6"></li>
                        <li ng-if="$index == 7" ng-repeat="obj in listDuree" data-target="#slider-carousel" data-slide-to="7"></li>
                        <li ng-if="$index == 8" ng-repeat="obj in listDuree" data-target="#slider-carousel" data-slide-to="8"></li>
                        <li ng-if="$index == 9" ng-repeat="obj in listDuree" data-target="#slider-carousel" data-slide-to="9"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active" ng-if="$index == 0" ng-repeat="obj in listDuree">
                            <div class="col-sm-6">
                                <h1>
                                    <span>
                                        {{obj.annonce.typeAnnonce.activite.lib_activite}}
                                    </span>
                                    -{{obj.annonce.typeAnnonce.libelle}}
                                </h1>
                                <h2>{{obj.annonce.libelle}}</h2>
                                <p>{{obj.annonce.description}}</p>
                                <a href="#/detailAnnonce/{{obj.annonce.id_annonce}}" class="btn btn-default get">
                                    <i class="fa fa-eye"></i> Voir details ...
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <img src="" class="girl img-responsive" alt="" />
                                <img src="web/images/courtage/{{obj.annonce.listMedia[0].fichier}}" alt="" height="400px" width="400px"/>
                                <!--<img src="web/images/home/pricing.png"  class="pricing" alt="" />-->
                            </div>
                        </div>
                        <div class="item" ng-if="$index > 0" ng-repeat="obj in listDuree">
                            <div class="col-sm-6">
                                <h1>
                                    <span>
                                        {{obj.annonce.typeAnnonce.activite.lib_activite}}
                                    </span>
                                    -{{obj.annonce.typeAnnonce.libelle}}
                                </h1>
                                <h2>{{obj.annonce.libelle}}</h2>
                                <p>{{obj.annonce.description}}</p>
                                <a href="#/detailAnnonce/{{obj.annonce.id_annonce}}" class="btn btn-default get">
                                    <i class="fa fa-eye"></i> Voir details ...
                                </a>
                            </div>
                            <div class="col-sm-6">
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