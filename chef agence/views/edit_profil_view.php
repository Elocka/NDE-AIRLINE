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
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Modifiez votre profil</h4></div>

                           
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="row">
                            <div class="col-12 col-md-12 mt-3">
                              <form id="upload-form">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="wizard mb-4">                                            
                                            <div class="connecting-line"></div>
                                            <ul class="nav nav-tabs d-flex mb-3">
                                                <li class="nav-item mr-auto">
                                                    <a class="nav-link position-relative round-tab text-left p-0 active border-0" data-toggle="tab" href="#id1"> 
                                                        <i class="icon-user position-relative text-white h5 mb-3"></i>
                                                        <small class="d-none d-md-block ">Information Personnelle</small>
                                                    </a>
                                                </li>
                                                <li class="nav-item mx-auto">
                                                    <a class="nav-link position-relative round-tab text-sm-center text-left p-0 border-0" data-toggle="tab" href="#id2"> 
                                                        <i class="icon-key position-relative text-white h5 mb-3"></i>
                                                        <small class="d-none d-md-block">Contact et Adresse</small>
                                                    </a>
                                                </li>
                                                <li class="nav-item mx-auto">
                                                    <a class="nav-link position-relative round-tab text-sm-center text-left p-0 border-0" data-toggle="tab" href="#id3"> 
                                                        <i class="icon-key position-relative text-white h5 mb-3"></i>
                                                        <small class="d-none d-md-block">Information Mot de Passe</small>
                                                    </a>
                                                </li>
                                                <li class="nav-item ml-auto">
                                                    <a class="nav-link position-relative round-tab text-sm-right text-left p-0 border-0" data-toggle="tab" href="#id4"> 
                                                        <i class="icon-credit-card position-relative text-white h5 mb-3"></i>
                                                        <small class="d-none d-md-block">Confirmation</small>
                                                    </a>
                                                </li>
                                            </ul>                                          

                                            <div class="tab-content">
                                                <div class="tab-pane fade active show" id="id1">
                                                    <div class="form">
                                                        <div class="form-group">
                                                            <label class=" ">Adresse mail</label>
                                                            <input type="email" class="form-control bg-transparent" placeholder="">
                                                            
                                                        </div>
                                                        <div class="form-group">
                                                            <label class=" ">Nom</label>
                                                            <input type="text" class="form-control bg-transparent" placeholder="">
                                                            
                                                        </div> 
                                                        <div class="form-group">
                                                            <label class=" ">Prenom</label>
                                                            <input type="text" class="form-control bg-transparent" placeholder="">
                                                            
                                                        </div>  
                                                        <button type="button" class="btn float-right btn-primary nexttab">Next</button>

                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="id2">
                                                    <div class="form">                                                   
                                                        <div class="form-group">
                                                            <label class=" ">Adresse</label>
                                                            <input type="text" class="form-control bg-transparent" placeholder="">
                                                            
                                                        </div>
                                                        <div class="form-group">
                                                            <label class=" ">Numero de telephone</label>
                                                            <input type="number" class="form-control bg-transparent" placeholder="">
                                                            
                                                        </div>
                                                        <div class="form-control-file custom-file overflow-hidden  mb-5">
                                                            <input id="customFile" type="file" class="custom-file-input" accept=".png, .jpg, .jpeg">
                                                            <img id="preview" src="#" alt="Image preview">
                                                            <label for="customFile" class="custom-file-label">Choose file</label>
                                                        </div>
                                                        <div class="d-flex">
                                                            <button type="button" class="btn btn-primary prevtab">Previous</button>
                                                            <button type="button" class="btn btn-primary nexttab ml-auto">Next</button>

                                                        </div>
                                                    </div>    
                                                </div>
                                                <div class="tab-pane fade" id="id3">
                                                    <div class="form">                                                   
                                                        <div class="form-group">
                                                            <label class=" ">Password</label>
                                                            <input type="password" class="form-control bg-transparent" placeholder="">
                                                            <small class="form-text">6-character minimum; case sensitive.</small>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class=" ">Confirm Password</label>
                                                            <input type="password" class="form-control bg-transparent" placeholder="">
                                                            <small class="form-text">6-character minimum; case sensitive.</small>
                                                        </div>
                                                        <div class="d-flex">
                                                            <button type="button" class="btn btn-primary prevtab">Previous</button>
                                                            <button type="button" class="btn btn-primary nexttab ml-auto">Next</button>

                                                        </div>
                                                    </div>    
                                                </div>
                                                <div class="tab-pane fade" id="id4">
                                                    <div class="form p-5 text-center">
                                                        <h3>Thank you !</h3>
                                                        <p>Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam mattis dictum aliquet.</p>
                                                        <button type="button" class="btn btn-primary prevtab">Previous</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                </form>
                            </div>
                           
                            
                            
                        </div>

                    </div>
                </div>
                <!-- END: Card DATA-->
            </div>
        </main>
        <!-- END: Content-->

        <script>
            $(document).ready(function() {
  // Afficher la prévisualisation de l'image sélectionnée
  $("#customFile").change(function() {
    readURL(this);
  });

  // Envoyer le formulaire d'upload
  $("#upload-form").submit(function(event) {
    event.preventDefault();
    var formData = new FormData(this);

    $.ajax({
      url: "edit_profil_view.php",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function(response) {
        // Traitement de la réponse
      }
    });
  });
});

// Fonction pour afficher la prévisualisation de l'image
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $("#preview").attr("src", e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

        </script>
<?php
require("partial/footer.php");

?>