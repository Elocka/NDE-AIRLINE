<?php
require("partial/hearder.php");

?>
<div>
            <div class="modal fade bd-example-modal-lg-delete" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel10" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel10">Supprimer Bus</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-row my-4 d-flex justify-content-center" method="post" autocomplete="off" data-parsley-validate > 



                               <div class="">
                                    <div class="display-1 mb-3 d-flex justify-content-center">
                                        <i class="ti-alert text-warning"></i>
                                    </div>
                                    <div class="text-center">
                                        <h4>VOULEZ VOUS SUPPRIMER LE BUS D'IMMATRICULATION</h4> 
                                   </div>
                                   <P class="text-center"><?= $buss->num_immatriculation ?></P>
                               </div>
                               
                                
                               <div class="modal-footer">
                            <button type="submit" class="btn btn-danger" name="delete">Supprimer</button>
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                               

                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <?php
require("partial/footer.php");

?>