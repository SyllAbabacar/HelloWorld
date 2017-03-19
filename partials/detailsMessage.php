<?php
include_once '../services/Session.php';
Session::initSession();
?>
<div class="col-sm-9">
    <!--{{message}}-->
    <div class="form-group alert">
        <div class="black_title" style="color: #FE980F">
            <div class="row">
                <div class="col-sm-1">
                    <a href="#/messagesAnn/{{message.annonce.id_annonce}}" title="Retour">
                        <i class="fa fa-reply-all fa-2x"></i>
                    </a>
                </div>
                <div class="col-sm-11">
                    <h3 class="text-center">
                        <i class="fa fa-list"></i>&nbsp;
                        Details message
                    </h3>
                </div>
            </div>
        </div>
        <!--{{message}}-->
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    Nom Emetteur : 
                    <em class="form-control">
                        {{message.nom}}
                    </em>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    Email Emetteur : 
                    <em class="form-control">
                        {{message.email}}
                    </em>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    Objet : 
                    <em class="form-control">
                        {{message.objet_message}}
                    </em>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    Date : 
                    <em class="form-control">
                        {{message.date_message}}
                    </em>
                </div>
            </div>
        </div>
        <div class="form-group">
            Contenu :                     
            <em class="form-control" style="height: 100px;">
                {{message.contenu_message}}
            </em>
        </div>
    </div>
</div>
<?php
include_once 'foot.php';
?>