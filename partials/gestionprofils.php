<?php include_once '../services/Session.php'; ?>
<?php Session::initSession() ?>
<!--{{user}}-->
<div class="col-lg-9">
    <h2 class="title text-center">Gestion de profils</h2>
    <div class="col-sm-12">
        <?= include 'alertMess.php'; ?>
        <div class="panel" style="box-shadow: 1px 3px 3px gray;"><!--login form-->
            <div class="panel-heading get" style="margin-top: 0px;">
                <h2 class="text-center">
                    <i class="fa fa-lock"></i>&nbsp;
                    Mise à jour
                </h2>
            </div>
            <form action="" class="login-form" ng-submit="verifLogin()">
                <div class="panel-body">
                    <div class="form-group">
                        <i class="fa fa-user-secret"></i>
                        <input type="text" ng-model="login" class="form-control" required placeholder="Votre pseudo" />
                    </div>
                    <div class="form-group">
                        <i class="fa fa-key"></i>
                        <input type="password" ng-model="mdp" class="form-control" required placeholder="Votre mot de passe" />
                    </div>
                </div>
                <div class="panel-footer get" style="margin: 0px">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success form-control">
                                    <i class="fa fa-check"></i>&nbsp;
                                    Soumettre
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <button type="reset" class="btn btn-danger form-control">
                                    <i class="fa fa-times"></i>&nbsp;
                                    Annuler
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div><!--/login form-->
    </div>
</div>
