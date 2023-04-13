
<div>
    <div class="modal fade bd-example-modal-lg-add" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel10" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel10">Ajout Utilisateur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form class="form-row my-4" method="post" autocomplete="off" data-parsley-validate > 
                    <?php  
                        
                                // appel des erreurs
                            include("partial/erreur.php");
                            
                    ?>
                        <div class="form-group input-success col-sm-6 my-3">  
                            <div class="input-group">    
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="icon-user"></i></span>
                                </div>
                                <input type="text" class="form-control" id="nom" name="nom" value="<?= getinput('nom');  ?>" onchange="this.setAttribute('value', this.value);">                                                
                                <label class="form-control-placeholder inside" for="username">Nom </label>
                            </div>
                        </div> 

                        <div class="form-group input-success col-sm-6 my-3">  
                            <div class="input-group">    
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="icon-user"></i></span>
                                </div>
                                <input type="text" class="form-control" id="prenom" name="prenom" value="<?= getinput('prenom');  ?>" onchange="this.setAttribute('value', this.value);">                                                
                                <label class="form-control-placeholder inside" for="username">Prenom </label>
                            </div>
                        </div> 

                        <div class="form-group input-success col-sm-6 my-3">  
                            <div class="input-group">    
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="fas fa-envelope-open"></i></span>
                                </div>
                                <input type="text" class="form-control" id="email" name="email" value="<?= getinput('email');  ?>" onchange="this.setAttribute('value', this.value);">                                                
                                <label class="form-control-placeholder inside" for="email">Email</label>
                            </div>
                        </div>

                    

                        <div class="form-group input-success col-sm-6 my-3">  
                            <div class="input-group">    
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="fas fa-phone"></i></span>
                                </div>
                                <input type="text" class="form-control" id="telephone" name="telephone" value="<?= getinput('telephone');  ?>" onchange="this.setAttribute('value', this.value);">                                                
                                <label class="form-control-placeholder inside" for="phhone">Telephone</label>
                            </div>
                        </div>

                        <div class="form-group input-success col-sm-6 my-3">  
                            <div class="input-group">    
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="fas fa-map-pin"></i></span>
                                </div>
                                <input type="text" class="form-control" id="adresse" value="<?= getinput('adresse');  ?>" name="adresse" onchange="this.setAttribute('value', this.value);">                                                
                                <label class="form-control-placeholder inside" for="adresse" name="adresse">Addresse</label>
                            </div>
                        </div>

                        <div class="form-group input-success col-sm-6 my-3" >
                        <select name="statut" id="" value="<?= getinput('statut');?>"> 
                            <?php foreach($st as $sta):?>
                                <option value="<?= $sta->id_type_user; ?>"><?= $sta->type; ?></option>
                            <?php endforeach; ?> 
                        </div>
                        <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="valider">Ajouter</button>
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>