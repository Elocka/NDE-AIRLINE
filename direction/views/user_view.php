<?php
include("partial/hearder.php");

?>

   <!-- START: Main Content-->
   <main>
            <div class="container-fluid site-width">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Gestion Utilisateur</h4></div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item">Page</li>
                                <li class="breadcrumb-item active"><a href="#">Gestion Utilisateur</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

               <!-- START: Card Data-->
               <div class="row">
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-header d-flex  justify-content-between align-items-center">                               
                            <button type="button" class="btn btn-primary rounded-btn btn-lg" data-toggle="modal" data-target=".bd-example-modal-lg-add"> <i class="fa fa-plus mr-1"></i> Ajouter Utilisateur</button>
                           
                            <div>
                                <select id="inputState" class="form-control">
                                    <option selected="">Choose...</option>
                                    <option value="">type utilisateur 1</option>
                                    <option value="">type utilisateur 2</option>
                                    <option value="">type utilisateur 3</option>
                                    
                                </select>
                            </div>
                           
                        </div>
                        <?php    include("partial/erreur.php");?>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display table dataTable table-striped table-bordered" >
                                    <thead>
                                        <tr>
                                        <th><input type="checkbox" id="checkAll" name="checkbox[]"></th>
                                            <th></th>
                                            <th>Adresse mail</th>
                                            <th>contact</th>
                                            <th>adresse</th>
                                            <th>Statut</th>
                                            <th>Agence</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($prep as $user): ?>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="update[]" value="<?= $user->id_user; ?>">
                                            </td>
                                            <td>
                                                <div class="d-flex">                                                   
                                                <img src="../asset/images/<?= $user->photo; ?>" alt="avatar" name="photo_<?= $user->id_user; ?>" class=" img-fluid mr-md-3 rounded-circle" width="70px">
                                                
                                                <div class="contact-info align-self-center">
                                                    <p class="h6 mb-0" name="nom_<?= $user->id_user; ?>"><?= $user->nom; ?></p>
                                                    <p class="h6 mb-0" name="prenom_<?= $user->id_user; ?>"><?= $user->prenom; ?></p>
                                                    
                                                    
                                                    
                                                </div>
                                            </div></td>
                                            <td name="email_<?= $user->id_user; ?>" ><?= $user->email; ?></td>
                                            <td name="num_telephone_<?= $user->id_user; ?>"><?= $user->num_telephone; ?></td>
                                            <td name="adresse_<?= $user->id_user; ?>"><?= $user->adresse; ?></td>
                                            <td name="agence_<?= $user->id_user; ?>"><?= $user->type; ?></td>
                                            <td name="statut_<?= $user->id_user; ?>"><?= $user->intitule; ?></td>
                                            
                                            <td class="d-flex justify-content-center">
                                              <button class="btn btn-success mr-2 btn-modify" data-toggle="modal" data-target="#bd-example-modal-lg-edit<?= $user->id_user ?>" data-id="" name="edit"><i class="fas fa-pencil-alt"></i></button>
                                               <button class="btn btn-danger sweet-4" data-toggle="modal" data-target=".bd-example-modal-lg-delete<?= $user->id_user ?>" name="delete"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                        
                                        
                                        
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div> 

                </div>                  
            </div>
            <!-- END: Card DATA-->
            </div>
        </main>
        <!-- END: Content-->


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
                            <form class="form-row my-4"  method="post"> 
                           

                                <div class="form-group input-success col-sm-6 my-3">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="icon-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="nom" name="nom" value="" onchange="this.setAttribute('value', this.value);">                                                
                                        <label class="form-control-placeholder inside" for="username">Nom </label>
                                    </div>
                                </div> 

                                <div class="form-group input-success col-sm-6 my-3">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="fas fa-envelope-open"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="email" value="" name="email" onchange="this.setAttribute('value', this.value);">                                                
                                        <label class="form-control-placeholder inside" for="email">Email</label>
                                    </div>
                                </div>

                                <div class="form-group input-success col-sm-6 my-3">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="fas fa-lock-open"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="prenom" name="prenom" value="" onchange="this.setAttribute('value', this.value);">                                                
                                        <label class="form-control-placeholder inside" for="password">Prenom</label>
                                    </div>
                                </div>

                                <div class="form-group input-success col-sm-6 my-3">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="telephone" name="telephone" value="" onchange="this.setAttribute('value', this.value);">                                                
                                        <label class="form-control-placeholder inside" for="phhone">Telephone</label>
                                    </div>
                                </div>

                                <div class="form-group input-success col-sm-6 my-3">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="fas fa-map-pin"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="adresse" name="adresse" value="" onchange="this.setAttribute('value', this.value);">                                                
                                        <label class="form-control-placeholder inside" for="adress">Addresse</label>
                                    </div>
                                </div>

                                

                                <div class="form-group input-success col-sm-6 my-3">
                                    <select id="statut" class="form-control" name="statut" id="" value="<?= getinput('statut');?>">
                                        <option selected="">Type utilisateur...</option>
                                        <?php foreach($st as $sta):?>
                                        <option value="<?= $sta->id_type_user; ?>"><?= $sta->type; ?></option>
                                    <?php endforeach; ?> 
                                        
                                    </select>
                                </div>

                                <div class="form-group input-success col-sm-6 my-3">
                                    <select id="agence" class="form-control" name="agence" id="" value="<?= getinput('agence');?>">
                                        <option selected="">Agence...</option>
                                        <?php foreach($ag as $agence):?>
                                        <option value="<?= $agence->id_agence; ?>"><?= $agence->intitule; ?></option>
                                    <?php endforeach; ?> 
                                        
                                    </select>
                                </div>

                                <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="valider">Ajouter</button>
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                            </form>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

        <!-- modal editer -->
        <?php foreach($prep as $user): ?>
        <div>
            <div id="bd-example-modal-lg-edit<?= $user->id_user ?>"  class="modal fade bd-example-modal-lg-edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel10" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel10">Editer Utilisateur</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-row my-4" method="post" action="edit_user.php"> 
                           
                            <input type="hidden"  name="id_user" value="<?= $user->id_user ?>">
                               <h3 class="text-center my-3">Type d'utilisateur</h3>
                              
                                <div class="form-group input-success col-sm-12 my-3">
                                    <select id="inputState" class="form-control" name="statut">
                                        
                                        <?php foreach($st as $sta):?>
                                            <option id="statut" name="statut" value="<?= $sta->id_type_user; ?>" <?php if($user->id_type_user==$sta->id_type_user){echo "selected";}?>><?= $sta->type; ?></option>
                                           
                                            <?php endforeach; ?> 
                                        
                                    </select>
                                </div>

                                <h3 class="text-center my-3">Nom d'agence</h3>

                                <div class="form-group input-success col-sm-12 my-3">
                                    <select id="inputState" class="form-control" name="agence">
                                        
                                        <?php foreach($ag as $agence):?>
                                            <option id="agence" name="agence" value="<?= $agence->id_agence; ?>" <?php if($user->id_agence==$agence->id_agence){echo "selected";}?>><?= $agence->intitule; ?></option>
                                           
                                            <?php endforeach; ?> 
                                        
                                    </select>
                                </div>
                                <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="modify">MODIFIER</button>
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <!-- modal supprimer -->
        <?php foreach($prep as $user): ?>
        <div>
            <div class="modal fade bd-example-modal-lg-delete<?= $user->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel10" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel10">Supprimer Bus</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form class="form-row my-4" method="post" action="delete_user.php"> 

                            <input type="hidden"  name="id_user" value="<?= $user->id_user ?>">

                               <div class="form-group input-success col-sm-8 my-3">
                                    <div class="display-1 mb-3 d-flex justify-content-center">
                                        <i class="ti-alert text-warning"></i>
                                    </div>
                                    <div class="text-center">
                                        <h4>VOULEZ VOUS SUPPRIMER L'UTILISATEUR </h4> 
                                   </div>
                                   <P class="text-center h3"> <?= $user->nom .' '.$user->prenom?>?</P>
                               </div>
                               
                                
                               <div class="modal-footer">
                               <button type="submit" class="btn btn-primary" name="delete">Supprimer</button>
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                               

                            </form>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

        <?php endforeach; ?>


<?php
require("partial/footer.php");

?>