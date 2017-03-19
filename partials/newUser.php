<?php include_once '../services/Session.php'; ?>
<?php include_once '../models/IMembreImpl.php'; ?>
<?php Session::initSession() ?>
<div class="col-sm-9 fade fadeInUpBig animated">
    <h2 class="title text-center">Gestion des utilisateurs</h2>
    <div class="panel" style="box-shadow: 1px 3px 1px 3px gray;"><!--login form-->
        <div class="panel-heading get" style="margin-top: 0px;">
            <h2 class="text-center">
                <i class="fa fa-user"></i>&nbsp;
                Nouveau Membre
            </h2>
        </div>
        <form name="formprofil" class="replay-box" style="margin: 0px">
            <div class="panel-body">
                <?php include 'alertMess.php'; ?>                
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Profil</label>
                            </div><br><br>
                            <select class="form-control" ng-model="user.select_profil">
                                <option></option>
                                <option ng-repeat="obj in listProfils" value="{{obj.id_profile}}">{{obj.libelle}}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-9">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Choisir une image</label>
                            </div><br><br>
                            <input type="file" demo-file-model="imgprofil" class="form-control btn btn-warning" accept="image/jpeg,image/jpg,image/png,image/gif" placeholder="Image profil" />
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="blank-arrow">
                            <label>Upload</label>
                        </div><br><br>
                        <button class="btn btn-warning form-control" ng-click="uploadFile()">
                            <i class="fa fa-upload"></i>&nbsp;
                            Transferer
                        </button>
                    </div>
                    <div class="col-sm-1" ng-if="new_photo != ''">
                        <div class="blank-arrow">
                            <label>Apercu</label>
                        </div><br><br>
                        <img class="img-circle img-responsive" style="width: 50px; height: 40px;" src="web/images/courtage/{{new_photo}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Pseudo</label>
                            </div><br><br>
                            <input type="text" class="form-control" ng-model="user.pseudo" placeholder="Pseudo"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Email</label>
                            </div><br><br>
                            <input type="text" class="form-control" ng-model="user.email" placeholder="Email"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Mot de passe</label>
                            </div><br><br>
                            <input type="text" class="form-control" ng-model="user.mdp" placeholder="Mot de passe"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>confirmer le mot de passe</label>
                            </div><br><br>
                            <input type="text" class="form-control" ng-model="user.confmdp" placeholder="Confirmer mot de passe"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Nom</label>
                            </div><br><br>
                            <input type="text" class="form-control" ng-model="user.nom"  placeholder="Nom" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Prenom</label>
                            </div><br><br>
                            <input type="text" class="form-control" ng-model="user.prenom" placeholder="Prenom" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Adresse</label>
                            </div><br><br>
                            <input type="text" class="form-control" ng-model="user.adresse" placeholder="Adresse" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Date de naissance</label>
                            </div><br><br>
                            <input type="date" class="form-control" ng-model="user.datenaiss" placeholder="Date de naissance"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Telephone</label>
                            </div><br><br>
                            <input type="text" class="form-control" ng-model="user.telephone" placeholder="Telephone"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Profession</label>
                            </div><br><br>
                            <input type="text" class="form-control" ng-model="user.profession" placeholder="Profession"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Facebook</label>
                            </div><br><br>
                            <input type="text" class="form-control" ng-model="user.facebook" placeholder="Facebook"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Twitter</label>
                            </div><br><br>
                            <input type="text" class="form-control" ng-model="user.twitter" placeholder="Twitter"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Google</label>
                            </div><br><br>
                            <input type="text" class="form-control" ng-model="user.google" placeholder="G+"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Youtube</label>
                            </div><br><br>
                            <input type="text" class="form-control" ng-model="user.youtube" placeholder="Youtube"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Linkedin</label>
                            </div><br><br>
                            <input type="text" class="form-control" ng-model="user.linkedin" placeholder="Linkedin"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="blank-arrow">
                                <label>Site</label>
                            </div><br><br>
                            <input type="text" ng-model="user.site" class="form-control" placeholder="Site"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer get" style="margin: 0px">
                <div class="row">
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <button type="submit" ng-click="saveUser()" class="btn btn-success form-control">
                                <i class="fa fa-check"></i>
                                Enregistrer
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