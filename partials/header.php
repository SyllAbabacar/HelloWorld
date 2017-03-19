<?php
include_once 'services/Session.php';
Session::initSession();
?>
<header id="header" ng-controller="activiteCtrl"><!--header-->
    <div class="header_top fadeInLeft animated" style="background-color: black; opacity: 0.9;"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="contactinfo social-icons">
                        <ul class="nav nav-pills">
                            <li>
                                <a href="" style="color: #FE980F;">
                                    <i class="fa fa-phone"></i>(+221) 33 850 51 50 &nbsp;-&nbsp; (+221) 33 867 49 11
                                </a>
                            </li>
                            <li>
                                <a href="mailto:contact@helloworld-sci.com" style="color: #FE980F;">
                                    <i class="fa fa-envelope"></i>contact@helloworld-sci.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="" style="color: #FE980F;">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="" style="color: #FE980F;">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="" style="color: #FE980F;">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="" style="color: #FE980F;">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle" style="box-shadow: 1px 1px 1px 1px #FE980F;"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-5">                     
                    <div class="shop-menu pull-left" style="border-radius: 15px">
                        <a href="#/accueil">
                            <img src="web/images/HANNOCE/HELLO ANNONCE.png" alt="Courtage" class="img-responsive"/>
                        </a><br>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li style="">
                                <a href="#/accueil" class="text-center img-circle" style="padding: 5px; border-top: #FE980F 2px dotted;">
                                    <i class="fa fa-home"></i><br>Accueil
                                </a>
                            </li>
                            <?php
                            if (Session::isSessionExit() && Session::getIdProfil() == 5):
                                ?>
                                <li style="">
                                    <a href="#/gesUser" class="text-center img-circle" style="padding: 5px; border-top: #FE980F 2px dotted;">
                                        <i class="fa fa-users"></i><br>Membres
                                    </a>
                                </li>
                                <?php
                            endif;
                            ?>
                            <?php
                            if (Session::isSessionExit() && Session::getIdProfil() == 1 || Session::getIdProfil() == 2 || Session::getIdProfil() == 3):
                                ?>
                                <li>
                                    <a href="#/listAnnonce/<?= Session::getIdUser() ?>" class="text-center img-circle" style="padding: 5px; border-top: #FE980F 2px dotted">
                                        <i class="fa fa-list"></i><br>Annonces
                                    </a>
                                </li>
                                <?php
                            endif;
                            ?>
                            <?php
                            if (Session::isSessionExit() && Session::getIdProfil() == 5):
                                ?>
                                <li>
                                    <a href="#/listAnnonce" class="text-center img-circle" style="padding: 5px; border-top: #FE980F 2px dotted">
                                        <i class="fa fa-list"></i><br>Annonces
                                    </a>
                                </li>
                                <?php
                            endif;
                            ?>
                            <?php
                            if (!Session::isSessionExit()):
                                ?>
                                <li>
                                    <a href="#/contact" class="text-center img-circle" style="padding: 5px; border-top: #FE980F 2px dotted">
                                        <i class="fa fa-envelope"></i><br>Contact
                                    </a>
                                </li>
                                <?php
                            elseif (Session::getIdProfil() == 5):
                                ?>
                                <li>
                                    <a href="#/message" class="text-center img-circle" style="padding: 5px; border-top: #FE980F 2px dotted">
                                        <i class="fa fa-envelope"></i><br>Messages
                                    </a>
                                </li>
                                <?php
                            else:
                                ?>
                                <li>
                                    <a href="#/message/<?= Session::getIdUser() ?>" class="text-center img-circle" style="padding: 5px; border-top: #FE980F 2px dotted">
                                        <i class="fa fa-envelope"></i><br>Message
                                    </a>
                                </li>
                            <?php
                            endif;
                            ?>

                            <?php
                            if (!Session::isSessionExit()):
                                ?>
                                <li>
                                    <a href="#/membre" class="text-center img-circle" style="padding: 5px; border-top: #FE980F 2px dotted">
                                        <i class="fa fa-user"></i><br>Inscription
                                    </a>
                                </li>
                                <?php
                            endif;
                            ?>
                            <?php
                            if (Session::isSessionExit() && Session::getIdProfil() == 5):
                                ?>
                                <li>
                                    <a href="#/demmande" class="text-center img-circle" style="padding: 5px; border-top: #FE980F 2px dotted">
                                        <i class="fa fa-sign-in"></i><br>Demandes
                                    </a>
                                </li>
                                <?php
                            endif;
                            ?>
                            <?php
                            if (!Session::isSessionExit()):
                                ?>
                                <li>
                                    <a href="#/connexion" class="text-center img-circle" style="padding: 5px; border-top: #FE980F 2px dotted">
                                        <i class="fa fa-sign-in"></i><br>Connexion
                                    </a>
                                </li>
                                <?php
                            endif;
                            ?>
                            <?php
                            if (Session::isSessionExit()) {
                                ?>
                                <li class="dropdown">
                                    <a class="dropdown-toggle btn btn-warning pull-right" data-toggle="dropdown" href="" style="margin-right: -10px">
                                        <img src="web/images/courtage/<?= Session::getPhoto() ?>" title="Photo profil" width="45px" height="45px" class="img-circle box_grey" style="width: 45px; height: 45px;">
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li>
                                            <span class="h4">
                                                <i class="fa fa-user"></i>&nbsp;
                                                <?= Session::getPseudo(); ?>
                                            </span>
                                        </li>
                                        <li class="h4 text-button text-info">
                                            <u><?= Session::getLibProfil() ?></u>
                                        </li>
                                        <!--<li class="divider" style="width: 100%; padding: 0px"></li>-->
                                        <li ng-if="<?= Session::getIdProfil() ?> == 1 && <?= Session::getEtat() ?> != 3 && <?= Session::getEtat() ?> != 0">
                                            <a href="" data-toggle="modal" data-target="#test" class="">
                                                <i class="fa fa-level-up fa-fw text-success"></i>
                                                Devenir pro
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#/profils/<?= Session::getIdUser() ?>" class="">
                                                <i class="fa fa-gear fa-fw text-info"></i>
                                                Gestion Profils
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#/deconnexion">
                                                <i class="fa fa-sign-out fa-fw text-danger"></i>
                                                Deconnexion
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- /.dropdown-user -->
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <div class="modal fade" ng-controller="becomeMPro" id="test" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header get" style="margin-top: 0px">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h1 class="modal-title text-center" id="myModalLabel">
                                            <i class="fa fa-star"></i>&nbsp;
                                            Pourquoi devenir membre pro
                                        </h1>
                                    </div>
                                    <form>
                                        <div class="modal-body text-justify">
                                            <div class="panel">
                                                <span>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </span>
                                                <span>
                                                    Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
                                                </span>
                                            </div>
                                            <div class="alert alert-success box_grey">
                                                <input type="checkbox" class="h3" ng-model="conf" value="1">&nbsp;Confirmer
                                            </div>
                                        </div>
                                        <?php include 'partials/alertMess.php'; ?>
                                        <div class="modal-footer get" style="margin-top: 0px;margin-bottom: 0px; padding-bottom: 0px;">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <button type="submit" ng-disabled="!conf" ng-click="validerDmdMpro()" class="btn btn-success form-control">
                                                            <i class="fa fa-check-circle-o"></i>&nbsp;Valider
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <button type="button" class="btn btn-danger form-control" class="close" data-dismiss="modal" aria-hidden="true">
                                                            <i class="fa fa-times"></i>&nbsp;Fermer
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <b>&copy;&nbsp;HellowAnnonce</b>&nbsp;
                                                Vos cibles toujours plus proche de vous!
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->
    <!--header-bottom-->
    <div class="header-bottom">
        <!--style="box-shadow: 1px 1px grey"-->
        <!--style="background-color: black; opacity: 0.8px; color: white"-->
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-lg-7 col-md-7">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li class="dropdown" ng-repeat="obj_act in listActivite">
                                <a href="#/activite/{{obj_act.id_activite}}">
                                    {{obj_act.lib_activite}}
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul role="menu" class="sub-menu">
                                    <li ng-repeat="objtype in obj_act.typeAnnonces">
                                        <a href="#/activite/{{obj_act.id_activite}}/type/{{objtype.id_type_annonce}}">
                                            {{objtype.libelle}}
                                        </a>
                                    </li>
                                </ul>
                            </li> 
                        </ul>
                    </div>
                </div>
                <div class="col-sm-5 col-lg-5 col-md-5">
                    <form action="">
                        <div class="searchform pull-right get" style="margin-top: 0px;">
                            <a href="#/annoncera" type="submit" class="btn btn-primary" style="margin-top: auto;">
                                <i class="fa fa-search-plus"></i>&nbsp;Recherche Avancée
                            </a>
                            <input type="text" required ng-model="rech" placeholder="Rechercher" class="" style=""/>
                            <a href="#/annonce/{{rech}}" type="submit" class="btn get" style="margin-top: auto;">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->