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
                        <?php    include("partial/erreur.php");?> 
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display table dataTable table-striped table-bordered" >
                                    <thead>
                                        <tr>
                                            <th>Reference </th>
                                            <th>Date et Heure d'envoi</th>
                                            <th>Description</th>
                                            <th>Date et heure de reception</th>
                                            <th>Etat</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <?php foreach ($transfert as $trans) :?>
                                    <tbody>
                                        <tr>
                                            <td><?= $trans->reference ?></td>
                                            <td> <p><?= $trans->date_envoie ?></p> <p><?= $trans->heure_envoie ?></p> </td>
                                            <td><?= $trans->description ?></td>
                                            <td> <p> <?= $trans->date_reception ?></p> <p><?= $trans->heure_arrivee ?></p> </td>
                                            <td> <input type="checkbox" name="etat" value="1" <?php if($trans->etat==1){echo "checked";}; ?>>
                              <?php if($trans->etat==1) {
                                
                               echo' <a href="transaction.php?id_transfert='.$trans->id_transfert.'&etat=0" class="btn btn-success"> actif</a>';
                                 }else{ 
                                
                               echo' <a href="transaction.php?id_transfert='.$trans->id_transfert.'&etat=1" class="btn btn-danger"> non actif</a>';
                                 } ?>
                            
                            </td>
                                            <td class="d-flex justify-content-center">
                                                <button class="btn btn-success mr-2" data-toggle="modal" data-target="#bd-example-modal-lg-edit<?= $trans->id_transfert ?>" name="edit"><i class="fas fa-pencil-alt"></i></button>
                                                <button class="btn btn-danger " data-toggle="modal" data-target="#bd-example-modal-lg-delete<?= $trans->id_transfert ?>" name="delete"><i class="fas fa-trash"></i></button>
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
                            <h5 class="modal-title" id="myLargeModalLabel10">Ajout Transfert</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-row my-4" method="post" > 
                            <?php    include("partial/erreur.php");?>
                            <div class="form-group col-sm-12 my-3 input-success">                                               
                                    <input type="text" class="form-control" name="caracteristique" value="" onchange="this.setAttribute('value', this.value);">
                                    <label class="form-control-placeholder" for="intitule">Caracteristique</label>
                                </div>
                                <div class="form-group col-sm-12 my-3 input-success">                                               
                                    <input type="date" class="form-control" name="date1" value="" onchange="this.setAttribute('value', this.value);">
                                    <label class="form-control-placeholder" for="caracteristique">date d'envoie</label>
                                </div>
                                <div class="form-group col-sm-12 my-3 input-success">                                               
                                    <input type="time" class="form-control" name="heure1" value="" onchange="this.setAttribute('value', this.value);">
                                    <label class="form-control-placeholder" for="caracteristique">Heure d'envoie</label>
                                </div>
                                <div class="form-group col-sm-12 my-3 input-success">                                               
                                    <input type="date" class="form-control" name="date2" value="" onchange="this.setAttribute('value', this.value);">
                                    <label class="form-control-placeholder" for="caracteristique">date de reception</label>
                                </div>


                                <div class="form-group col-sm-12 my-3 input-success ">                                               
                                    <input type="time" class="form-control" name="heure2" value="" onchange="this.setAttribute('value', this.value);">
                                    <label class="form-control-placeholder" for="immatriculation">Heure reception</label>
                                </div>

                               
                                <div class="form-group col-sm-12 my-3 input-success">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="fas fa-map-pin"></i></span>
                                        </div>
                                        <select id="agence" class="form-control" name="agence" id="" value="<?= getinput('agence');?>">
                                        <option selected="">Agence qui recoit...</option>
                                        <?php foreach($ag as $agence):?>
                                        <option value="<?= $agence->id_agence; ?>"><?= $agence->intitule; ?></option>
                                    <?php endforeach; ?> 
                                        
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12 my-3 input-success">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="fas fa-map-pin"></i></span>
                                        </div>
                                        <select id="bus" class="form-control" name="bus" id="" value="<?= getinput('bus');?>">
                                        <option selected="">bus...</option>
                                        <?php foreach($bus as $buss):?>
                                        <option value="<?= $buss->id_bus; ?>"><?= $buss->intitules_bus; ?></option>
                                    <?php endforeach; ?> 
                                        
                                    </select>
                                    </div>
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
        <?php foreach ($transfert as $trans) :?>
        <div>
            <div id="bd-example-modal-lg-edit<?= $trans->id_transfert ?>" class="modal fade bd-example-modal-lg-edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel10" aria-hidden="true" style="display: none;">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel10">Editer Bus</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-row my-4" method="post" action="edit_transfert.php">
                            
                            <input type="hidden"  name="id_transfert" value="<?= $trans->id_transfert ?>">
                            <div class="form-group col-sm-12 my-3 input-success">                                               
                                    <input type="date" class="form-control" name="date3" value="<?= $trans->date_envoie ?>" onchange="this.setAttribute('value', this.value);">
                                    <label class="form-control-placeholder" for="date">Date d'envoi</label>
                                </div>
                                <div class="form-group col-sm-12 my-3 input-success">                                               
                                    <input type="time" class="form-control" name="heure3" value="<?= $trans->heure_envoie ?>" onchange="this.setAttribute('value', this.value);">
                                    <label class="form-control-placeholder" for="heure">Heure d'envoi</label>
                                </div>
                                <div class="form-group col-sm-12 my-3 input-success">                                               
                                    <input type="date" class="form-control" name="date4" value="<?= $trans->date_reception ?>" onchange="this.setAttribute('value', this.value);">
                                    <label class="form-control-placeholder" for="date">Date reception</label>
                                </div>
                                <div class="form-group col-sm-12 my-3 input-success">                                               
                                    <input type="time" class="form-control" name="heure4" value="<?= $trans->heure_arrivee ?>" onchange="this.setAttribute('value', this.value);">
                                    <label class="form-control-placeholder" for="heure">Heure d'arrivee</label>
                                </div>

                                <div class="form-group col-sm-12 my-3 input-success">                                               
                                    <input type="text" class="form-control" name="caracteristique" value="<?= $trans->description ?>" onchange="this.setAttribute('value', this.value);">
                                    <label class="form-control-placeholder" for="caracteristique">Caracteristique</label>
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
        <?php foreach ($transfert as $trans) :?>
        <div>
            <div id="bd-example-modal-lg-delete<?= $trans->id_transfert ?>" class="modal fade bd-example-modal-lg-delete" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel10" aria-hidden="true" style="display: none;">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel10">Delete Bus</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-row my-4" method="post" action="delete_transfert.php"> 
                            <input type="hidden"  name="id_transfert" value="<?= $trans->id_transfert ?>">
                            <div class="form-group input-success col-sm-12 my-3">
                                    <div class="display-1 mb-3 d-flex justify-content-center">
                                        <i class="ti-alert text-warning"></i>
                                    </div>
                                    <div class="text-center">
                                        <h4>VOULEZ VOUS SUPPRIMER Le transfert de reference </h4> 
                                   </div>
                                   <P class="text-center h3"> <?= $trans->reference ?>?</P>
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