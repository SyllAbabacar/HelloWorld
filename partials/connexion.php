<?php include_once '../services/Session.php'; ?>
<?php Session::initSession() ?>
<div class="col-lg-9">
    <?php
    if (!Session::isSessionExit()):
        ?>
        <h2 class="title text-center">Parametres de conexion</h2>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8" style="padding: 15px;">
                <?php
                include 'alertMess.php';
                ?>
                <div class="panel" style=""><!--login form-->
                    <div class="panel-heading get" style="margin-top: 0px;">
                        <h2 class="text-center">
                            <i class="fa fa-lock"></i>&nbsp;
                            Authentification
                        </h2>
                    </div>
                    <form action="" class="login-form" ng-submit="verifLogin()">
                        <div class="panel-body">
                            <div class="form-group text-center">
                                <img src="web/images/courtage/profil.jpg" class="img-circle box_grey" width="100px" height="100px">
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon get box_grey">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    <input type="text" ng-model="login" class="form-control" required placeholder="Votre pseudo" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon get box_grey">
                                        <i class="fa fa-key"></i>
                                    </span>
                                    <input type="password" ng-model="mdp" class="form-control" required placeholder="Votre mot de passe" />
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer get box_grey" style="margin: 0px;">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-3">
                                        <button type="submit" class="btn btn-success form-control">
                                            <i class="fa fa-check"></i>&nbsp;
                                            Connexion
                                        </button>
                                    </div>
                                    <div class="col-sm-3">
                                        <button type="reset" class="btn btn-danger form-control">
                                            <i class="fa fa-times"></i>&nbsp;
                                            Annuler
                                        </button>
                                    </div>
                                    <div class="col-sm-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!--/login form-->
                {{userConnected}}
            </div>
            <div class="col-sm-2"></div>
        </div>
        <?php
    endif;
    ?>
</div>
