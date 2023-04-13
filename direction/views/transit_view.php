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
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Transit COLIS</h4></div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item">Page</li>
                                <li class="breadcrumb-item active"><a href="#">transit colis</a></li>
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
                                            <th>Intitule</th>
                                            <th>Reference</th>
                                            <th>Caracteristique</th>
                                            <th>Type</th>
                                            <th>Date de creation</th>
                                            <th>Statut</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" name="update[]" value=""></td>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td><button class="btn btn-outline-info " data-toggle="modal" data-target=".bd-example-modal-lg-carac">voir les caracteristique</button></td>
                                            <td>velo</td>
                                            
                                            <td>29/05/2002 </td>
                                            <td><span class="badge outline-badge-success">recu</span></td>
                                            
                                        </tr>
                                        <tr>
                                        <td><input type="checkbox" name="update[]" value=""></td>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td><button class="btn btn-outline-info " data-toggle="modal" data-target=".bd-example-modal-lg-carac">voir les caracteristique</button></td>
                                            <td>velo</td>
                                            
                                            <td>29/05/2002 </td>
                                            <td><span class="badge outline-badge-warning">Non recu</span></td>
                                            
                                        </tr>
                                        <tr>
                                        <td><input type="checkbox" name="update[]" value=""></td>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td><button class="btn btn-outline-info " data-toggle="modal" data-target=".bd-example-modal-lg-carac">voir les caracteristique</button></td>
                                            <td>velo</td>
                                            
                                            <td>29/05/2002 </td>
                                            <td><span class="badge outline-badge-danger">Non envoye</span></td>
                                            
                                        </tr>
                                        
                                       
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th><input type="checkbox" id="checkAll" name="checkbox[]"></th>
                                            <th>Intitule</th>
                                            <th>Reference</th>
                                            <th>Caracteristique</th>
                                            <th>Type</th>
                                            <th>Date de creation</th>
                                            <th>Statut</th>
                                            
                                        </tr>
                                    </tfoot>
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
                            <h5 class="modal-title" id="myLargeModalLabel10">Ajout Utilisateur</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-row my-4" > 

                                <div class="form-group input-success col-sm-6 my-3">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="icon-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="username" value="" onchange="this.setAttribute('value', this.value);">                                                
                                        <label class="form-control-placeholder inside" for="username">Nom et Prenom</label>
                                    </div>
                                </div> 

                                <div class="form-group input-success col-sm-6 my-3">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="fas fa-envelope-open"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="email" value="" onchange="this.setAttribute('value', this.value);">                                                
                                        <label class="form-control-placeholder inside" for="email">Email</label>
                                    </div>
                                </div>

                                <div class="form-group input-success col-sm-6 my-3">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="fas fa-lock-open"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="password" value="" onchange="this.setAttribute('value', this.value);">                                                
                                        <label class="form-control-placeholder inside" for="password">Mot de passe</label>
                                    </div>
                                </div>

                                <div class="form-group input-success col-sm-6 my-3">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="phhone" value="" onchange="this.setAttribute('value', this.value);">                                                
                                        <label class="form-control-placeholder inside" for="phhone">Telephone</label>
                                    </div>
                                </div>

                                <div class="form-group input-success col-sm-6 my-3">  
                                    <div class="input-group">    
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0" id="basic-addon1"><i class="fas fa-map-pin"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="adress" value="" onchange="this.setAttribute('value', this.value);">                                                
                                        <label class="form-control-placeholder inside" for="adress">Addresse</label>
                                    </div>
                                </div>

                                <div class="form-group input-success col-sm-6 my-3">
                                    <select id="inputState" class="form-control">
                                        <option selected="">Type utilisateur...</option>
                                        <option value="">type utilisateur 1</option>
                                        <option value="">type utilisateur 2</option>
                                        <option value="">type utilisateur 3</option>
                                        
                                    </select>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Ajouter</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal editer -->
        <div>
            <div class="modal fade bd-example-modal-lg-edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel10" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel10">Editer  COLISr</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-row my-4" > 

                               <h3 class="text-center my-3">Nom colis</h3>

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

         <div>
            <div class="modal fade bd-example-modal-lg-carac" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel10" aria-hidden="true" style="display: none;">
                <div class="modal-dialog ">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel10">caracteristique</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium facilis consequatur ipsam nihil ab quos. Expedita minus qui iure sunt. Nemo numquam fuga qui aliquam optio neque nostrum repellendus delectus?</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non assumenda aspernatur natus impedit sed voluptates rerum accusamus facere error dolor laboriosam, laborum, inventore reprehenderit fuga ipsa, aliquam incidunt doloribus officia!</p>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, a tenetur voluptates aliquam culpa iure nesciunt. Pariatur est, ab laborum voluptas molestiae porro, deleniti numquam sapiente suscipit eveniet, maiores ipsam.</p>
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
require("partial/footer.php");

?>