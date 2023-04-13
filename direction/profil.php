<?php

include('../asset/config/bdconnexion.php');
include("../inclusions/fonction.php");
if(!empty($_GET['id_user'])  and   $_GET['id_user']==$_SESSION['id_user'])
{
    $select = $db->prepare("SELECT * FROM user,agence,type_user WHERE user.id_agence=agence.id_agence AND user.id_type_user=type_user.id_type_user AND id_user = ?");
    $select->execute([$_SESSION['id_user']]);
    $rs = $select->fetch();

    

    
    
        
 }

 else 
{
    redirect("profil.php?id_user=".$_SESSION['id_user']);
//   // redirect("index.php");
 }


//   include("views/profil_view.php");

?>
<?php
require("partial/hearder.php");

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.8.1/css/all.css"></script>
<style>
  body{padding:0;margin:0;background-color:#eee}.border-grey{border: 1px solid;border-end-start-radius: 5px;border-end-end-radius: 5px;border-top: none;border-color: #dee2e6}.active{background-color: white}#myTab{background-color: #dee2e6}.nav-link{color: #666}
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<style>
        #image_preview{
            width: 200px;
            height: 200px;
            background-repeat: no-repeat;
            background-size:cover;
            border: 1px solid #000;
            object-fit: cover;
        }
    </style>
   <ol class="breadcrumb bg-transparent align-self-center m-0 p-0 ml-auto">
                    <li class="breadcrumb-item"><a href="#">Application</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>
        </div>
        <!-- END: Main Menu-->

        <!-- START: Main Content-->
        <main>
            <div class="container-fluid site-width">
                
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><span class="h4 my-auto">User Profile</span></div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item">User</li>
                                <li class="breadcrumb-item active"><a href="#">Profile</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->
        
                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="position-relative">
                            <div class="background-image-maker py-5"></div>
                            <div class="holder-image">
                                <img src="../asset/images/portfolio13.jpg" alt="" class="img-fluid d-none">
                            </div>
                            <div class="position-relative px-3 py-5">
                                <div class="media d-md-flex d-block">
                                    <a href="#"><img src="../asset/images/image_directeur/<?= $rs->photo?>" width="100" alt="" class="img-fluid rounded-circle"></a>
                                    <div class="media-body z-index-1">
                                        <div class="pl-4">
                                            <h1 class="display-4 text-uppercase text-white mb-0"><?= $rs->nom?></h1>
                                            <h6 class="text-uppercase text-white mb-0"><?= $rs->email?></h6>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="profile-menu mt-4 theme-background border  z-index-1 p-2">
                            <div class="d-sm-flex">
                                <div class="align-self-center">
                                    <ul class="nav nav-pills flex-column flex-sm-row" id="myTab" role="tablist">
                                        <li class="nav-item ml-0">
                                            <a class="nav-link  py-2 px-3 px-lg-4  active" data-toggle="tab" href="#timeline"> Timeline</a>
                                        </li>
                                        <li class="nav-item ml-0">
                                            <a class="nav-link  py-2 px-4 px-lg-4 " data-toggle="tab" href="#about"> About</a>
                                        </li>
                                        <li class="nav-item ml-0">
                                            <a class="nav-link py-2 px-4 px-lg-4" data-toggle="tab" href="#activities">Activities </a>
                                        </li>
                                        <li class="nav-item ml-0 mb-2 mb-sm-0">
                                            <a class="nav-link py-2 px-4 px-lg-4" data-toggle="tab" href="#message"> Message</a>
                                        </li>                                                        
                                    </ul>
                                </div>
                                <div class="align-self-center ml-auto text-center text-sm-right">
                                    <a href="#">
                                        <i class="icon-social-dropbox h5"></i>
                                    </a>
                                    <a href="#">
                                        <i class="icon-social-facebook h5"></i>
                                    </a>                                   
                                    <a href="#">
                                        <i class="icon-social-github h5"></i>
                                    </a>
                                    <a href="#">
                                        <i class="icon-social-google h5"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                <?php    include("partial/erreur.php");?>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                
                                   
                                   
                                   <!-- START: Card Data-->
                                   <div class="container mt-5"> 
                  <ul class="m-0 nav nav-fill nav-justified nav-tabs" id="myTab" role="tablist"> 
                    <li class="nav-item" role="presentation">
                       <button class="active nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"> 
                        <i class="fas fa-home"></i> Profile </button> 
                      </li> 
                      <li class="nav-item" role="presentation"> 
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"> 
                          <i class="fas fa-user-astronaut"></i> Edit photo </button> 
                        </li> 
                        <li class="nav-item" role="presentation"> 
                          <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false"> 
                            <i class="far fa-envelope-open"></i> Edit profil </button> </li> 
                            <li class="nav-item" role="presentation"> <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">
                               <i class="fas fa-sliders-h"></i> Edit password </button> </li> </ul> 
                            <div class="border-grey bg-white p-3 tab-content"> <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row pt-1">
                                         <div class="col-6 mb-3">
                                           <h6>Nom</h6>
                                                <p class="text-muted"><?= $rs->nom?></p>
                                           </div>
                                         <div class="col-6 mb-3">
                                            <h6>Prenom</h6>
                                             <p class="text-muted"><?= $rs->prenom?></p>
                                          </div>
                                        </div>

                                        <div class="row pt-1">
                                      <div class="col-6 mb-3">
                                         <h6>Email</h6>
                                             <p class="text-muted"><?= $rs->email?></p>
                                       </div>
                                      <div class="col-6 mb-3">
                                         <h6>Phone</h6>
                                        <p class="text-muted"><?= $rs->num_telephone?></p>
                                       </div>
                                     </div>
                
                
                                     <div class="row pt-1">
                                     <div class="col-6 mb-3">
                                      <h6>Adresse</h6>
                                        <p class="text-muted"><?= $rs->adresse?></p>
                                     </div>
                                    <div class="col-6 mb-3">
                                   <h6>Situation matrimoniale</h6>
                                  <p class="text-muted"><?= $rs->situation_matrimoniale?></p>
                                  </div>
                                      </div>
                                <div class="row pt-1">
                                     <div class="col-6 mb-3">
                                 <h6>Sexe</h6>
                                <p class="text-muted"><?= $rs->sexe?></p>
                                  </div>
                                  </div>
                               </div>
                                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab"> 
                                <form method="POST" action="profile_update_p.php" enctype="multipart/form-data" >
                                                        <div class="row p-2">
                                                            

                                                            <div class="form-floating mb-2 col-sm-12 p-1">
                                                                <input type="file" class="form-control " id="edit_photo" name="photo" required/>
                                                                
                                                                <label for="photo">Photo</label>
                                                                <div id="image_preview" class="img-responsive"></div>
                                                            </div>
                                                        
                                                        </div>
                                                       <div class="card-footer d-flex justify-content-between">
                                                       
                                                       <button type="button" class="btn btn-light btn-flat " data-bs-dismiss="modal" aria-hidden="true"> Close</button>
                                                       <button type="submit" class="btn btn-primary" name="ph">mettre a jour</button>
                                                       </div>
                                                    </form>
                                </div>
                                        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                                                  <form action="profile_update.php" enctype="multipart/form-data" method="post">
                                                    <div class="form">
                                                        <div class="form-group">
                                                            <label class=" ">Adresse mail</label>
                                                            <input type="email" name="mail" class="form-control bg-transparent" placeholder="" value="<?= getinput("mail")? getinput("mail"): $rs->email ?>">
                                                            
                                                        </div>
                                                        <div class="form-group">
                                                            <label class=" ">Nom</label>
                                                            <input type="text" name="nom" class="form-control bg-transparent" value="<?= getinput("nom")? getinput("nom"): $rs->nom ?> "placeholder="">
                                                            
                                                        </div> 
                                                        <div class="form-group">
                                                            <label class=" ">Prenom</label>
                                                            <input type="text" name="prenom" class="form-control bg-transparent" value="<?= getinput("prenom")? getinput("prenom"): $rs->prenom ?>" placeholder="">
                                                            
                                                        </div>  
                                                        <div class="form-group">
                                                            <label class=" ">Adresse</label>
                                                            <input type="text" name="adresse" class="form-control bg-transparent" value="<?= getinput("adresse")? getinput("adresse"): $rs->adresse ?>" placeholder="">
                                                            
                                                        </div>
                                                        <div class="form-group">
                                                            <label class=" ">Numero de telephone</label>
                                                            <input type="number" name="tel" class="form-control bg-transparent" value="<?= getinput("tel")? getinput("tel"): $rs->num_telephone ?>" placeholder="">
                                                            
                                                        </div>
                                                        <div class="form-group">
                                                        <label class=" ">Situation matrimoniale</label>
                                                           <select name="situation" id="situation"  class="form-control">
                                                                     <option value="marie" <?php if($rs->situation_matrimoniale=='marie' || $rs->situation_matrimoniale=='maried'){echo 'selected';} ?>>marie</option>
                                                                     <option value="celibataire"  <?php if($rs->situation_matrimoniale=='celibataire'|| $rs->situation_matrimoniale=='single'){echo 'selected';} ?>>celibataire</option>
                                                           </select>
                                                        </div>
                                                        <div class="form-group">
                                                            
                                                           <label class="radio-inline">
                                                             <input type="radio" name="sexe" value="masculin"   <?php if($rs->sexe=='masculin'){ echo 'checked';}  ?> > Masculin
                                                           </label>
                                                          <label class="radio-inline">
                                                                <input type="radio" name="sexe" value="feminin"   <?php if($rs->sexe=='feminin'){ echo 'checked';}  ?> > Feminin
                                                          </label>
                                                        </div>
                                                        

                                                    </div>
                                                    <button class="btn btn-primary" type="submit" name="modif-p">modifier</button>
                                                        </form>
                                   </div> 
                                   <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                   <div class="settings-form">
                                                        <h4 class="text-primary">modifier Mot de passe</h4>
                                                        <form class="mt-3"action="profile_update.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                                                            
                                                            <div class="row">
                                                                <div class="mb-3 col-md-12">
                                                                    <span>le mot de passe par defaut c'est "12345678".
                                                                        <p>si vous voulez le changer faites le ici!</p>
                                                                    </span>
                                                                    <label class="form-label">Mot da passe Actuel</label>
                                                                    <input type="password" placeholder="curr_Password" name="password" class="form-control" required>
                                                                </div>
                                                                <div class="mb-3 col-md-12">
                                                                    <label class="form-label">Nouveau Mot de passe</label>
                                                                    <input type="password" placeholder="Password" name="password" class="form-control">
                                                                </div>
                                                            </div>
                                                            
                                                            <button class="btn btn-primary" type="submit" name="pw">modifier mot de passe 
                                                                </button>
                                                        </form>
                                                    </div>
                                     </div> 
                                    </div>
</div>
                <!-- END: Card DATA-->  
                                    
                                    


                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
                <!-- END: Card DATA-->
            </div>
        </main>
        <!-- END: Content-->
<?php
require("partial/footer.php");

?>
<script src="">var firstTabEl = document.querySelector('#myTab li:last-child a')
  var firstTab = new bootstrap.Tab(firstTabEl)

  firstTab.show()</script>
     <script>
        $(document).ready(function(){
            $('#edit_photo').change(function(){
                const file = this.files[0];
                const reader = new FileReader();
                reader.onloadend = function() {
                    $('#image_preview').css('background-image', 'url('+reader.result+')');
                }
                if (file) {
                    reader.readAsDataURL(file);
                } else {
                    $('#image_preview').css('background-image', '');
                }
            });
        });
    </script>