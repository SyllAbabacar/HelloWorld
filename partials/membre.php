<div class="col-lg-9">
    <h2 class="title text-center">Devenir membre du site</h2>
    <div class="col-sm-1"></div>         
    <div class="col-sm-10" style="padding: 15px">
        <?php include 'alertMess.php'; ?>
        <div class="panel" style="box-shadow: 1px 3px 3px gray;"><!--sign up form-->
            <div class="panel-heading get" style="margin-top: 0px;">
                <h2 class="text-center">
                    <i class="fa fa-user"></i>&nbsp;
                    Inscription
                </h2>
            </div>
            <form role="form" ng-submit="saveMember()">
                <div class="panel-body replay-box" style="margin: 0px">
                    <div class="form-group">
                        <div class="blank-arrow">
                            <label>Email</label>
                        </div><br><br>
                        <input type="email" ng-model="email" placeholder="Votre email *" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <div class="blank-arrow">
                            <label>Pseudo</label>
                        </div><br><br>
                        <input type="text" ng-model="pseudo" placeholder="Votre pseudo *" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <div class="blank-arrow">
                            <label>Mot de passe</label>
                        </div><br><br>
                        <input type="password" ng-model="password" placeholder="Votre mot de passe *" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <div class="blank-arrow">
                            <label>Confirmer le mot de passe</label>
                        </div><br><br>
                        <input type="password" ng-model="confirmpass" placeholder="Confirmer votre mot de passe *" class="form-control" required/>
                    </div>
                </div>                
                <div class="panel-footer get" style="margin-top: 0px">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-success form-control">
                                    <i class="fa fa-check"></i>
                                    Souscrire
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
        </div>
    </div><!--/sign up form-->
</div>
