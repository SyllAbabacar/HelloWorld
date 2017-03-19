<footer id="footer" class=""><!--Footer-->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="companyinfo">
                        <a href="#/accueil">
                            <img class="img-responsive" src="web/images/HANNOCE/HELLO ANNONCE.png" alt=""/>
                        </a>
                        <p class="vatti">
                            Vos cibles toujours plus proche de vous!
                        </p>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="web/images/courtage/8.jpg" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Chef d'exploitation</p>
                            <h2>Charger d'exploiter les produits de helloworld.</h2>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="web/images/courtage/mct.jpg" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Commerciale en chef</p>
                            <h2>Mene tout les transaction sur hellowannonce.</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="web/images/courtage/fatima.jpg" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Chef de produit</p>
                            <h2>Garant de la plateforme hellowannonce.</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="web/images/home/iframe4.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Responssable technique</p>
                            <h2>Intervenant en chef sur le plan technique.</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="address">
                        <img src="web/images/home/map.png" alt="" />
                        <p class="h4">Scap Urbam Immeuble Serigne Babacar Sy Lot 1B</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="alert" style="background-color: black; margin-bottom: 0px">
        <div class="container">
            <div class="row">
                <div class="col-sm-4" ng-controller="activiteCtrl">
                    <!--{{listActivite}}-->
                    <div class="single-widget">
                        <h2 class="vatti">Activités</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li ng-repeat="act in listActivite" class="box_grey form-group">
                                <a href="#/activite/{{act.id_activite}}">
                                    {{act.lib_activite}}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-widget">
                        <h2 class="vatti">Navigation</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li class="box_grey form-group"><a href="#/accueil">Accueil</a></li>
                            <li class="box_grey form-group"><a href="#/membre">Devenir membre</a></li>
                            <li class="box_grey form-group"><a href="#/contact">Contact</a></li>
                            <li class="box_grey form-group"><a href="#/connexion">Connexion</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-widget">
                        <h2 class="vatti">Politiques</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li class="box_grey form-group"><a href="#">CGU</a></li>
                            <li class="box_grey form-group"><a href="#">Annonces</a></li>
                            <li class="box_grey form-group"><a href="#">Membre pro</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="single-widget">
                        <h2 class="vatti">Adresse Map</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sfr!2ssn!4v1486750855413!6m8!1m7!1sQhKeY3ZBgld44S2q2j_jow!2m2!1d14.73607587158806!2d-17.46311745146232!3f354.1415224603564!4f1.862925627771432!5f0.7820865974627469" class="img-responsive box_orange" frameborder="1" style="border:1; opacity: 0.8; width: 100%;min-height: 337px" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom" style="background-color: #fe980f;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    Copyright © 2016 Hello Word Inc. Touts droit reserv&eacute;.
                </div>
                <div class="col-sm-6 text-right">
                    <a class="" target="_blank" href="http://www.helloworld-sci.com">
                        Hello Word Team
                    </a>
                </div>
            </div>
        </div>
    </div>

</footer><!--/Footer-->