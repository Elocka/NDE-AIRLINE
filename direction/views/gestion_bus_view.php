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
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Gestion de Bus</h4></div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item">Page</li>
                                <li class="breadcrumb-item active"><a href="#">Gestion de Bus</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

               <!-- START: Card Data-->
               <div class="row">
               <?php    include("partial/erreur.php");?>
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-header d-flex  justify-content-between align-items-center">                               
                            <button type="button" class="btn btn-primary rounded-btn btn-lg" data-toggle="modal" data-target=".bd-example-modal-lg-add"> <i class="fa fa-plus mr-1"></i> Ajouter un Bus</button>
                           
                            <div>
                                <select id="inputState" class="form-control">
                                    <option selected="">Choose...</option>
                                    <option value="">Bus agence 1</option>
                                    <option value="">Bus agence 2</option>
                                    <option value="">Bus agence 3</option>
                                    <option value="">Bus agence 4</option>
                                    <option value="">Bus agence 5</option>
                                </select>
                            </div>
                           
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display table dataTable table-striped table-bordered" >
                                    <thead>
                                        <tr>
                                            <th>Intitule </th>
                                            <th>N-Immatricuation</th>
                                            
                                            <th>caracteristiques bus</th>
                                            <th>Etat</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <?php foreach ($buss as $bus) :?>
                                    <tbody>
                                        <tr>
                                            <td><?= $bus->intitules_bus ?></td>
                                            <td><?= $bus->num_immatriculation ?></td>
                                            
                                            <td><?= $bus->caracteristique_bus ?></td>
                                            <td> <input type="checkbox" name="etat" value="1" <?php if($bus->statut==1){echo "checked";}; ?>>
                              <?php if($bus->statut==1) {
                                
                               echo' <a href="gestion_bus.php?id='.$bus->id_bus.'&statut=0" class="btn btn-success"> actif</a>';
                                 }else{ 
                                
                               echo' <a href="gestion_bus.php?id='.$bus->id_bus.'&statut=1" class="btn btn-danger"> non actif</a>';
                                 } ?>
                            
                            </td>
                                            <td class="d-flex justify-content-center">
                                                <button class="btn btn-success mr-2" data-toggle="modal" data-target="#bd-example-modal-lg-edit<?= $bus->id_bus ?>" name="edit"><i class="fas fa-pencil-alt"></i></button>
                                                <button class="btn btn-danger mr-2" data-toggle="modal" data-target="#bd-example-modal-lg-delete<?= $bus->id_bus ?>" name="delete"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                    <?php endforeach;?>
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
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel10">Ajout Bus</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-row my-4" method="post" > 
                            
                           
                            <div class="form-group col-sm-12 my-3 input-success">                                               
                                    <input type="text" class="form-control" name="intitule" value="" onchange="this.setAttribute('value', this.value);">
                                    <label class="form-control-placeholder" for="intitule">Intitule du bus</label>
                                </div>
                                <div class="form-group col-sm-12 my-3 input-success">                                               
                                    <input type="text" class="form-control" name="caracteristique" value="" onchange="this.setAttribute('value', this.value);">
                                    <label class="form-control-placeholder" for="caracteristique">Caracteristique</label>
                                </div>
                               


                                <div class="form-group col-sm-12 my-3 input-success ">                                               
                                    <input type="text" class="form-control" name="immatriculation" value="" onchange="this.setAttribute('value', this.value);">
                                    <label class="form-control-placeholder" for="immatriculation">N-Immatricuation Bus</label>
                                </div>

                                

                               
                                
                                <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="valider">Save changes</button>
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                               

                            </form>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

        <!-- modal editer -->
        <?php foreach ($buss as $bus) :?>
        <div>
            <div id="bd-example-modal-lg-edit<?= $bus->id_bus ?>" class="modal fade bd-example-modal-lg-edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel10" aria-hidden="true" style="display: none;">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel10">Editer Bus</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-row my-4" method="post" action="edit_bus.php"> 
                           
                            <input type="hidden"  name="id_bus" value="<?= $bus->id_bus ?>">
                            <div class="form-group col-sm-12 my-3 input-success">                                               
                                    <input type="text" class="form-control" name="intitule" value="<?= $bus->intitules_bus ?>" onchange="this.setAttribute('value', this.value);">
                                    <label class="form-control-placeholder" for="agence">Intitule Bus</label>
                                </div>

                                <div class="form-group col-sm-12 my-3 input-success">                                               
                                    <input type="text" class="form-control" name="caracteristique" value="<?= $bus->caracteristique_bus ?>" onchange="this.setAttribute('value', this.value);">
                                    <label class="form-control-placeholder" for="caracteristique">Caracteristique</label>
                                </div>

                                <div class="form-group col-sm-12 my-3 input-success ">                                               
                                    <input type="text" class="form-control" name="immatriculation" value="<?= $bus->num_immatriculation ?>" onchange="this.setAttribute('value', this.value);">
                                    <label class="form-control-placeholder" for="immatriculation">Immatriculation</label>
                                </div>

                               

                               
                               
                                <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="modifier">Save changes</button>
                            <button type="resset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div> 

                               

                            </form>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;?>
        <!-- modal supprimer -->

        <!-- modal supprimer -->
        <?php foreach ($buss as $bus) :?>
        <div>
            <div id="bd-example-modal-lg-delete<?= $bus->id_bus ?>" class="modal fade bd-example-modal-lg-delete" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel10" aria-hidden="true" style="display: none;">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel10">Delete Bus</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-row my-4" method="post" action="delete_bus.php"> 
                            <input type="hidden"  name="id_bus" value="<?= $bus->id_bus ?>">
                            <div class="form-group input-success col-sm-12 my-3">
                                    <div class="display-1 mb-3 d-flex justify-content-center">
                                        <i class="ti-alert text-warning"></i>
                                    </div>
                                    <div class="text-center">
                                        <h4>VOULEZ VOUS SUPPRIMER Le bus d'immatriculation </h4> 
                                   </div>
                                   <P class="text-center h3"> <?= $bus->num_immatriculation ?>?</P>
                               </div>
                               

                               
                               
                                <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="delete">Supprimer</button>
                            <button type="resset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div> 

                               

                            </form>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;?>



<?php
require("partial/footer.php");

?>