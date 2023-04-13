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
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">reception COLIS</h4></div>

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
                    <div class="card">
                        <div class="card-header d-flex  justify-content-between align-items-center">                               
                         
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


        
        <!-- modal editer -->
        <div>
            <div class="modal fade bd-example-modal-lg-edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel10" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel10">Editer  Colis</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-row my-4" > 

                               <h3 class="text-center my-3">Statut colis</h3>

                                <div class="form-group input-success col-sm-12 my-3">
                                    <select id="inputState" class="form-control">
                                        <option selected="">statut...</option>
                                        <option value="">recu</option>
                                        <option value="">non recu</option>
                                        
                                        
                                    </select>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">MODIFIER</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal supprimer -->

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
                            <form class="form-row my-4 d-flex justify-content-center" > 

                                <!-- <div class="form-group input-success col-sm-6">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="icon-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="username3" value="" onchange="this.setAttribute('value', this.value);">                                                
                                        <label class="form-control-placeholder inside" for="username3">Nom</label>
                                    </div>
                                </div> -->

                               <div class="">
                                    <div class="display-1 mb-3 d-flex justify-content-center">
                                        <i class="ti-alert text-warning"></i>
                                    </div>
                                    <div class="text-center">
                                        <h4>VOULEZ VOUS SUPPRIMER COLIS</h4> 
                                   </div>
                                   <P class="text-center">nom COLIS ?</P>
                               </div>
                               
                                

                               

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger">Supprimer</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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