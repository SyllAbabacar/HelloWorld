<div class="col-sm-9 fadeInLeftBig animated">
    <h2 class="title text-center">Ajouter des images</h2>
    <div class="alert alert-success">
        Votre annonce a ete bien pris en compte. 
        A present on vous propose de relier votre annonce a des image pour l'illustrer !!!        
    </div>
    <div class="blog-post-area replay-box" style="margin: 0px">
        <div class="row">
            <div class="col-sm-6">
                <div class="">
                    <div class="panel panel-warning">
                        <div class="panel-heading">Ajouter un nouveau image</div>
                        <form action="" enctype="multipart/form-data">
                            <div class="panel-body">
                                <div class="single-blog-post">
                                    <div class="form-group">
                                        <div class="blank-arrow">
                                            <label>Image</label>
                                        </div>
                                        <span>*</span>
                                        <input type="file" required demo-file-model="myFile1"  class="form-control box_orange rounded" id ="myFileField" accept="image/jpeg,image/jpg,image/png,image/gif"/>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                                <div class="blank-arrow">
                                                    <label>Description :</label>
                                                </div><br><br>
                                                <textarea rows="5" ng-model="descImage1" class="form-control box_orange rounded" placeholder="Description"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <div class="blank-arrow">
                                                    <label>Aperçu</label>
                                                </div><br><br>
                                                <div class="">
                                                    <img src="controlleur/img/{{tof1}}" class="box_orange rounded img-thumbnail"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12" ng-if="msg != ''">
                                        <div class="form-group">
                                            <div class="blank-arrow">
                                                <label>NB :</label>
                                            </div><br><br>
                                            <div class="box_orange alert alert-success rounded text-center">
                                                {{msg}}
                                                <!--{{donnee}}-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12" ng-if="erreur != ''">
                                        <div class="form-group">
                                            <div class="blank-arrow">
                                                <label>NB :</label>
                                            </div><br><br>
                                            <div class="box_orange alert alert-danger text-center rounded">
                                                {{erreur}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <button type="button" ng-hide="valid" ng-click="uploadFile1()" class="btn btn-warning rounded form-control">
                                            <i class="fa fa-upload"></i> Ajouter
                                        </button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="button" ng-show="valid" ng-click="saveMedias()" class="btn btn-success form-control rounded">
                                            <i class="fa fa-check-circle"></i>&nbsp;Enregistrer
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-warning">
                    <div class="panel-heading">Information sur l'annonce</div>
                    <div class="panel-body">
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <div class="blank-arrow">
                                    <label>Reference</label>
                                </div><br><br>
                                <div class="form-control box_orange rounded">
                                    {{listeAnnonces.reference}}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="blank-arrow">
                                    <label>Date de creation</label>
                                </div><br><br>
                                <div class="form-control box_orange rounded">
                                    {{listeAnnonces.date_creation}}
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <div class="blank-arrow">
                                    <label>Libelle</label>
                                </div><br><br>
                                <div class="form-control box_orange rounded">
                                    {{listeAnnonces.libelle}}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="blank-arrow">
                                    <label>Montant</label>
                                </div><br><br>
                                <div class="form-control box_orange rounded">
                                    {{listeAnnonces.montant}}F Cfa 
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-12">
                                <div class="blank-arrow">
                                    <label>Description</label>
                                </div><br><br>
                                <div class="form-control box_orange rounded" style="height: 90px;">
                                    {{listeAnnonces.description}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
