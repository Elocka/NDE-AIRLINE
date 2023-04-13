<?php

include('../asset/config/bdconnexion.php');
include("../inclusions/fonction.php");

if(!empty($_GET['id_user'])  and   $_GET['id_user']==$_SESSION['id_user'])
 {
     
     $select = $db->prepare("SELECT * FROM user,agence,type_user WHERE user.id_agence=agence.id_agence and user.id_type_user=type_user.id_type_user and user.id_user= ?");
     $select->execute([$_SESSION['id_user']]);
     $resultat = $select->fetch();
    $pass=$resultat->password;

     
     if(isset($_POST['modifier'])){
      extract($_POST);
      $erreur = [];
      // echo "ok";
  // traitement du profil
  if(!empty($_FILES['image']) and $_FILES['image']['name']!=''){
   
   
    $nomfichier = $_FILES['image']['name'];
    
    $extension_nomfichier = strtolower(strrchr($nomfichier,"."));

    $taillefichier = $_FILES['image']['size'];

    $taillemax_autorise = 520000240;  // taille max autorise = 5KO = 5*1024

    $chemintemporaire = $_FILES['image']['tmp_name'];

    $extensionsAutorisees = array(".jpeg", ".jpg", ".gif", ".png");

    $repertoire = "../asset/images";

    //renommer le nom du fichier
    $filerename = $_SESSION['id_user'].$extension_nomfichier;

    if(!in_array($extension_nomfichier, $extensionsAutorisees))
    {
        $erreur[] = "Fichier n'appartient pas aux extensions Autorisees (.jpeg, .jpg, .gif, .png)";
    }
  
   
     
    elseif($taillefichier > $taillemax_autorise)
    {
        $erreur[] = "Fichier est trop Lourd (Max : 5120 octets = 5KO)";
    }
  

   elseif(move_uploaded_file($chemintemporaire, $repertoire.'/'.$filerename))
    {
       
   
   $file=$db->prepare('UPDATE user SET photo=? WHERE id_user=?');
    $file->execute([$filerename,$_SESSION['id_user']]);
   
}
}else{
 $erreur[] = "Echec du Transfert de Fichier";
}

      if(control_champ(["nom","prenom","mail","tel","situation","sexe","adresse","passe","confpasse"]))
      {
   
     
        ///traitement du champ nom
        if(mb_strlen($nom) < 3)
        {
          $erreur[] = "nom trop court(minimun 3)";
        }
        if(mb_strlen($prenom) < 3)
        {
          $erreur[] = "prenom trop court(minimun 6)";
        }
         
// traitement du mail
        if(!filter_var($mail, FILTER_VALIDATE_EMAIL))
        {
          $erreur[] = "l'email est invalide";
        }

         else if($_SESSION['email']!==$mail){
           if(existe('user','email',$mail)){

            $erreur[] = "l'email existe deja";
          }
        } 
          if(mb_strlen($passe)<6){
            $erreur[] = "mot de passe trop court(minimun 8)";
          }
          if($confpasse!=$passe){
            $erreur[] = "vos deux mots de passes ne sont pas identiques";
          }
          else if($_SESSION['password']!==$passe){
            if(existe('user','password',$passe)){
 
             $erreur[] = "le mot de passe existe deja";
           }
         } 
          
          if(count($erreur)==0)
          {//1

          $update = $db->prepare("UPDATE user SET nom =?,prenom=?,password=?,email=?,sexe =?,situation_matrimoniale=?,num_telephone=?,adresse =? WHERE id_user = ? ");
          $update->execute([$nom,$prenom,$passe,$mail,$sexe, $situation,$tel,$adresse,$_SESSION['id_user']]);
         // var_dump( $res->execute([$nom,$pseudo,$mail,$gender, $situation,$tel,$adresse,$pays,$facebook, $twitter,$_SESSION['id']])); die();

          //redirect("profile.php?id=".$_SESSION['id']);
          }else{
            save_input();
          }

        }
          
//         //  if(!empty($nom) || !empty($pseudo) || !empty($mail)){
        
            

 
           
        
  }else{//4
    
    clear();
  }
}
  else 
  {
      redirect("edit_profil.php?id_user=".$_SESSION['id_user']);
  //   // redirect("index.php");
   }



  include("views/edit_profil_view.php");

?>