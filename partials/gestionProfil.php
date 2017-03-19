<?php include_once '../services/Session.php'; ?>
<?php Session::initSession() ?>
<div class="col-sm-9 fadeInUpBig animated">
    <h2 class="title text-center">Gestion de profils</h2>
    <div class="panel" style="box-shadow: 1px 3px 1px 3px gray;"><!--login form-->
        <div class="panel-heading get" style="margin-top: 0px;">
            <h2 class="text-center">
                <i class="fa fa-gears"></i>&nbsp;
                Mise à jour
            </h2>
        </div>
        <!--{{userConnected}}-->
        <form action="" name="formprofil" enctype="multipart/form-data">
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="form-group">
                            <input type="file" demo-file-model="imgprofil" class="form-control btn btn-warning" accept="image/jpeg,image/jpg,image/png,image/gif" placeholder="Image profil" />
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-warning form-control" ng-click="uploadFile()">
                            <i class="fa fa-upload"></i>&nbsp;
                            Transferer
                        </button>
                    </div>
                    <div class="col-sm-1">
                        <img class="img-circle img-responsive" style="width: 50px; height: 40px;" src="web/images/courtage/{{tof}}" ng-if="tof != ''">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" ng-model="pseudo" placeholder="Pseudo" />
                        </div>
                        <!--{{pseudo}}-->
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" ng-model="email" readonly="" placeholder="Email"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nom" ng-model="nom" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Prenom" ng-model="prenom" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Adresse" ng-model="adresse" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <script>
                                    var today = new Date().toISOString().split('T')[0];
                                    document.getElementById("datenaiss").setAttribute('max', today);
                        </script>
                        <div class="form-group">
                            <input type="date" class="form-control" id="datenaiss" placeholder="Date de naissance" ng-model="datenaiss" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Telephone" ng-model="telephone" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" ng-model="profession" placeholder="Profession"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" ng-model="facebook" placeholder="Facebook"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" ng-model="twitter" placeholder="Twitter"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" ng-model="google" placeholder="G+"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" ng-model="youtube" placeholder="Youtube"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" ng-model="linkedin" placeholder="Linkedin"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" ng-model="site" placeholder="Site"/>
                        </div>
                    </div>
                </div>
                <?php include_once '../partials/alertMess.php'; ?>
            </div>
            <div class="panel-footer get" style="margin: 0px">
                <div class="row">
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <!--<input type="submit" name="upUser" value="Soumettre" class="btn btn-success form-control">-->
                            <button type="submit" ng-click="soumettre()" class="btn btn-success form-control">
                                <i class="fa fa-check"></i>
                                Soummettre
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <button type="reset" class="btn btn-danger form-control">
                                <i class="fa fa-times"></i>
                                Annuler
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
            </div>
        </form>
    </div><!--/login form-->
</div>