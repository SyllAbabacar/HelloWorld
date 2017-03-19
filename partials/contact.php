<div id="contact-page" class="col-sm-9">
    <div class="bg">
        <div class="row">    		
            <div class="col-sm-12">    			   			
                <h2 class="title text-center">Contact</h2>    			    				    				
                <div id="gmap" class="contact-form form-group">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sfr!2ssn!4v1486750855413!6m8!1m7!1sQhKeY3ZBgld44S2q2j_jow!2m2!1d14.73607587158806!2d-17.46311745146232!3f354.1415224603564!4f1.862925627771432!5f0.7820865974627469" class="" width="100%" height="500px" frameborder="2" style="" allowfullscreen></iframe>
                </div>
            </div>			 		
        </div>    	
        <div class="row">  	
            <div class="col-sm-7">
                <div class="contact-form">
                    <h2 class="title text-center">Nous contacter</h2>
                    <div class="status alert alert-success" style="display: none"></div>
                    <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                        <div class="form-group col-md-6">
                            <input type="text" ng-model="contact.nom" class="form-control" required="required" placeholder="Nom">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" ng-model="contact.email" class="form-control" required="required" placeholder="Email">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" ng-model="contact.objet" class="form-control" required="required" placeholder="Objet">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea ng-model="contact.message" id="message" required="required" class="form-control" rows="8" placeholder="Saisir votre message"></textarea>
                        </div>                        
                        <div class="form-group col-md-12">
                            <input type="submit" ng-click="envoyer()" name="submit" class="btn btn-warning form-control pull-right" value="Envoyer">
                        </div>
                    </form>
                    <!--{{contact}}-->
                </div>
                <?php include_once './alertMess.php'; ?>
            </div>
            <div class="col-sm-5">
                <h2 class="title text-center">Info de contact</h2>
                <div class="contact-info">
                    <address>
                        <p class="h2 title vatti" style="">
                            HellowAnnonce
                        </p><hr>
                        <h3>
                            <i class="fa fa-map-marker"></i>&nbsp;
                            Adresse
                        </h3>
                        <p class="fatima">
                            <span>
                                Scat Urbam Immeubble Serigne Babacar Sy Lot 1B, Dakar, Senegal
                            </span>
                        </p><hr>
                        <h3>
                            <i class="fa fa-phone"></i>&nbsp;
                            Telephone
                        </h3>
                        <p class="fatima">
                            <span>(+221) 33 850 51 50</span><br>
                            <span>(+221) 33 867 49 11</span>
                        </p><hr>
                        <h3>
                            <i class="fa fa-send"></i>&nbsp;
                            Messagerie
                        </h3>
                        <p class="fatima">
                            <span>
                                contact@helloworld-sci.com
                            </span>
                        </p>
                    </address>
                    <div class="social-networks">
                        <h2 class="title text-center">Nous suivre</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>    			
        </div>  
    </div>	
</div>
