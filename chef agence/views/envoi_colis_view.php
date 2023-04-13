<?php
require("partial/hearder.php");

?>

 <!-- START: Main Content-->
 <main>
            <div class="container-fluid site-width">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">envoi COLIS</h4></div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item">Page</li>
                                <li class="breadcrumb-item active"><a href="#">envoi colis</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

               <!-- START: Card Data-->
               <div class="row">
               
                <div class="col-12 mt-3">
                <?php    include("partial/erreur.php");?>
                    <div class="card">
                        <div class="card-header d-flex  justify-content-between align-items-center">                               
                            <button type="button" class="btn btn-primary rounded-btn btn-lg" data-toggle="modal" data-target=".bd-example-modal-lg-add"> <i class="fa fa-plus mr-1"></i> Ajouter Colis</button>
                           
                            
                           
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display table dataTable table-striped table-bordered" >
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" id="checkAll" name="checkbox[]"></th>
                                            <th>reference</th>
                                            <th>type de colis</th>
                                            <th>Caracteristique</th>
                                            <th>nom expediteur</th>
                                            <th>numero cni de l'expediteur</th>
                                            <th>nom du recepteur</th>
                                            <th>numero cni du recepteur</th>
                                            <th>agence de depart</th>
                                           
                                            <th>Date de creation</th>
                                            <th>Statut</th>
                                            <th>Action</th>
                                            <th>agence de destination</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($prep as $colis): ?>
                                        
                                        <tr>
                                        <td><input type="checkbox" name="update[]" value=""></td>
                                       
                                            <td><?= $colis->refference; ?></td>
                                            <td><?= $colis->type_colis; ?></td>
                                            <td><button class="btn btn-outline-info " data-toggle="modal" data-target="#bd-example-modal-lg-carac<?= $colis->id_colis; ?>">voir les caracteristique</button></td>
                                           
                                            
                                            <td><?= $colis->nom_expediteur; ?> </td>
                                            <td><?= $colis->num_cni_expediteur; ?></td>
                                            <td><?= $colis->nom_recepteur; ?></td>
                                            <td><?= $colis->num_cni_recepteur; ?></td>
                                            <td <?= $colis->id_colis; ?>><?= $colis->intitule ?></td>
                                            
                                            <td><?= $colis->date_creation ?></td>
                                            <td> 
                              <?php if($colis->statut_colis==2) {
                                
                               echo' <a href="envoi_colis.php?id='.$colis->id_colis.'&statut=3" class="btn btn-primary">en cours</a>';
                                 }
                                 elseif($colis->statut_colis==3){
                                    echo' <a href="envoi_colis.php?id='.$colis->id_colis.'&statut=1" class="btn btn-success"> envoye</a>';
                                 }
                                 else{ 
                                
                               echo' <a href="envoi_colis.php?id='.$colis->id_colis.'&statut=2" class="btn btn-danger"> non envoye</a>';
                                 } ?>
                            
                            </td>
                                            
                                            <td class="d-flex justify-content-center">
                                               
                                                <button class="btn btn-danger " data-toggle="modal" data-target=".bd-example-modal-lg-delete"><i class="fas fa-trash"></i></button>
                                            </td>
                                            <?php foreach($pres as $colis): ?>
                                            <td <?= $colis->id_transfert; ?>><?= $colis->intitule ?></td>
                                            <?php endforeach; ?>
                                        </tr>
                                        <?php endforeach; ?>
                                        
                                       
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div> 

                </div>                  
                </div>
        </main>
        <!-- END: Content-->


        <div>
            <div class="modal fade bd-example-modal-lg-add" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel10" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel10">Ajout d'un COLIS</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-row my-4" method="post" > 
                           
                           

                                <div class="form-group input-success col-sm-6 my-3">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="caracteristique" id="phhone" value="" onchange="this.setAttribute('value', this.value);">                                                
                                        <label class="form-control-placeholder inside" for="phhone">caracteristique du colis</label>
                                    </div>
                                </div>

                                <div class="form-group input-success col-sm-6 my-3">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="fas fa-map-pin"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="type" id="adress" value="" onchange="this.setAttribute('value', this.value);">                                                
                                        <label class="form-control-placeholder inside" for="adress">type de colis</label>
                                    </div>
                                </div>

                                <div class="form-group input-success col-sm-6 my-3">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="icon-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="nom1" id="username" value="" onchange="this.setAttribute('value', this.value);">                                                
                                        <label class="form-control-placeholder inside" for="username">Nom de L'expediteur</label>
                                    </div>
                                </div> 

                               
                                <div class="form-group input-success col-sm-6 my-3">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="icon-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="nom2" id="username" value="" onchange="this.setAttribute('value', this.value);">                                                
                                        <label class="form-control-placeholder inside" for="username">Nom du recepteur</label>
                                    </div>
                                </div> 

                                <div class="form-group input-success col-sm-6 my-3">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="icon-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="prenom2" id="username" value="" onchange="this.setAttribute('value', this.value);">                                                
                                        <label class="form-control-placeholder inside" for="username">prenom du receptuer</label>
                                    </div>
                                </div> 

                                <div class="form-group input-success col-sm-6 my-3">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="icon-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="prenom1" id="username" value="" onchange="this.setAttribute('value', this.value);">                                                
                                        <label class="form-control-placeholder inside" for="username">prenom de L'expediteur</label>
                                    </div>
                                </div> 

                                <div class="form-group input-success col-sm-6 my-3">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="fas fa-envelope-open"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="email" name="mail2" value="" onchange="this.setAttribute('value', this.value);">                                                
                                        <label class="form-control-placeholder inside" for="email">Email du recepteur</label>
                                    </div>
                                </div>

                                <div class="form-group input-success col-sm-6 my-3">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="fas fa-envelope-open"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="mail1" id="email" value="" onchange="this.setAttribute('value', this.value);">                                                
                                        <label class="form-control-placeholder inside" for="email">Email de l'expediteur</label>
                                    </div>
                                </div>

                                <div class="form-group input-success col-sm-6 my-3">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="icon-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="telephone2" id="username" value="" onchange="this.setAttribute('value', this.value);">                                                
                                        <label class="form-control-placeholder inside" for="username">Telephone du recepteur</label>
                                    </div>
                                </div> 

                                <div class="form-group input-success col-sm-6 my-3">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="icon-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="telephone1" id="username" value="" onchange="this.setAttribute('value', this.value);">                                                
                                        <label class="form-control-placeholder inside" for="username">Telephone de L'expediteur</label>
                                    </div>
                                </div>

                                <div class="form-group input-success col-sm-6 my-3">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="icon-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="cni2" id="username" value="" onchange="this.setAttribute('value', this.value);">                                                
                                        <label class="form-control-placeholder inside" for="username">cni du recepteur</label>
                                    </div>
                                </div> 

                                <div class="form-group input-success col-sm-6 my-3">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="icon-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="cni1" id="username" value="" onchange="this.setAttribute('value', this.value);">                                                
                                        <label class="form-control-placeholder inside" for="username">cni de L'expediteur</label>
                                    </div>
                                </div> 

                            
                                
                                <div class="form-group input-success col-sm-6 my-3">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="fas fa-map-pin"></i></span>
                                        </div>
                                        <select id="agence" class="form-control" name="transfert" id="" value="<?= getinput('transfert');?>">
                                        <option selected="">transfert...</option>
                                        <?php foreach($transfert as $transfert):?>
                                        <option value="<?= $transfert->id_transfert; ?>"><?= $transfert->reference; ?></option>
                                    <?php endforeach; ?> 
                                        
                                    </select>
                                    </div>
                                </div>

                               
                                <div class="modal-footer">
                            <button type="submit" name="valider" class="btn btn-primary">Ajouter</button>
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        
        <!-- modal supprimer -->
        <?php foreach($prep as $colis): ?>
        <div>
            <div class="modal fade bd-example-modal-lg-delete" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel10" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel10">Supprimer COLIS</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-row my-4 d-flex justify-content-center" action="delete_colis.php" method="post" > 

                            <input type="hidden"  name="id_colis" value="<?= $colis->id_colis ?>">

                               <div class="">
                                    <div class="display-1 mb-3 d-flex justify-content-center">
                                        <i class="ti-alert text-warning"></i>
                                    </div>
                                    <div class="text-center">
                                        <h4>VOULEZ VOUS SUPPRIMER COLIS</h4> 
                                   </div>
                                   <P class="text-center"><?= $colis->type_colis; ?></P>
                               </div>
                               
                                

                               <div class="modal-footer">
                            <button type="submit" class="btn btn-danger" name="delete">Supprimer</button>
                            <button type="resset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div> 

                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
         <!-- modal caracteristique -->
         <?php foreach($prep as $colis): ?>
         <div>
            <div id="bd-example-modal-lg-carac<?= $colis->id_colis; ?>" class="modal fade bd-example-modal-lg-carac" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel10" aria-hidden="true" style="display: none;">
                <div class="modal-dialog ">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel10">caracteristique</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                            <p><?= $colis->caracteristique_colis; ?></p>
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
<?php
require("partial/footer.php");

?>