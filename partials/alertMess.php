<div class="row replay-box" style="margin: 0px">
    <div class="col-sm-12" ng-if="msg != ''">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            <i class="fa fa-times-circle-o"></i>
        </button>
        <div class="form-group text-center row">
            <div class="blank-arrow">
                <label>NB :</label>
            </div><br><br>
            <div class="alert alert-success rounded">
                <i class="fa fa-2x fa-check-circle"></i><hr>
                <div class="h4">{{msg}}</div>
            </div>
        </div>
    </div>
    <div class="col-sm-12" ng-if="erreur != ''">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            <i class="fa fa-times-circle-o"></i>
        </button>
        <div class="form-group text-center row">
            <div class="blank-arrow">
                <label>NB :</label>
            </div><br><br>
            <div class="alert alert-danger rounded">
                <i class="fa fa-2x fa-times-circle"></i><hr>
                {{erreur}}
            </div>
        </div>
    </div>
</div>
