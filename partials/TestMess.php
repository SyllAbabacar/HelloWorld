<?php include_once '../services/Session.php'; ?>
<?php Session::initSession() ?>
<!--{{user}}-->
<div class="col-sm-9">
    <div class="panel"><!--login form-->
        <div class="panel-heading get" style="margin-top: 0px">
            <h2 class="text-center">
                <i class="fa fa-rocket"></i>&nbsp;
                Message
            </h2>
        </div>
        <form action="" ng-submit="saveMessage()">
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <!--<i class="fa fa-user-md"></i>-->
                            <input type="text" ng-model="nom" class="form-control" required placeholder="Votre nom" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <!--<i class="fa fa-key"></i>-->
                            <input type="text" ng-model="email" class="form-control" required placeholder="Votre email" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <!--<i class="fa fa-key"></i>-->
                    <input type="text" ng-model="objet" class="form-control" required placeholder="Votre objet" />
                </div>
                <div class="form-group">
                    <!--<i class="fa fa-key"></i>-->
                    <textarea class="form-control" ng-model="contenu" rows="5" placeholder="Saisir votre message..."></textarea>
                </div>
            </div>
            <div class="panel-footer get" style="margin: 0px">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-success form-control">
                                <i class="fa fa-send"></i>&nbsp;
                                Envoyer
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
    </div><!--/login form-->
</div>
