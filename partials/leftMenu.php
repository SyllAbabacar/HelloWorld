<div class="col-sm-3 panel-group fade fadeInDownBig animated" ng-controller="activiteCtrl">
    <div class="left-sidebar">
        <h2>Publicite</h2>
        <div class="text-center panel-group"><!--shipping-->
            <a href="">
                <img src="web/images/HANNOCE/shipping1.png" class="img-responsive"/>
                <?php // include_once '../partials/slider.php';?>
            </a>
        </div><!--/shipping-->
        <h2>Activite</h2>
        <div class="panel-group category-products box_grey" id="accordian"><!--category-productsr-->
            <div class="panel panel-warning alert" ng-repeat="obj in listActivite">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="#/activite/{{obj.id_activite}}" class="">
                            {{obj.lib_activite}}
                        </a>
                    </h4>
                    <i class="pull-right fa fa-folder-open"></i>
                </div>
            </div>            
        </div><!--/category-products-->
        <div class="brands_products"><!--brands_products-->
            <h2>Type Annonce</h2>
            <div class="brands-name box_grey">
                <ul class="nav nav-pills nav-stacked alert">
                    <li ng-repeat="type in listTypeAnnonce" class="box_orange form-group">
                        <a href="#/activite/{{type.id_activite}}/type/{{type.id_type_annonce}}"> 
                            <!--<span class="pull-right">(50)</span>-->
                            {{type.libelle}}
                        </a>
                    </li>
                </ul>
            </div>
        </div><!--/brands_products-->
    </div>
</div>
