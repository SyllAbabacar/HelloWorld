<div id="contact-page" class="container col-sm-9">
    <div class="bg">  	
        <div class="row">  	
            <div class="col-sm-8">
                <div class="contact-form">
                    <h2 class="title text-center">Gestion media</h2>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form>
                                <div class="form-group">
                                    <label for="myFileField">Choisir une photo: </label>
                                    <input type="file" demo-file-model="myFile"  class="form-control" id ="myFileField"/>
                                </div>
                                <button ng-click="uploadFile()" class = "btn btn-primary">Uploader...</button>
                            </form>
                        </div>
                    </div>
                    <div>
                        <img src="controlleur/img/{{serverResponse}}" height="400px" width="400px"/>
                    </div>
                </div>
            </div>    			
        </div>  
    </div>	
</div>
