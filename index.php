<?php 
  include('asset/config/bdconnexion.php');
  include("inclusions/fonction.php");
  

   if(isset($_POST['connexion'])){

    if(control_champ(["emailaddress","password"])){

     extract($_POST);
     $erreur=[];
    
     $pass= SHA1($password);
    //  var_dump($pass);
    //  die;
     $select=$db->prepare("SELECT * FROM user,type_user WHERE (email =:idem) AND password=:password AND  user.id_type_user=type_user.id_type_user");
     $select->execute(["idem"=>$emailaddress,"password"=>$pass]);
     $result=$select->rowCount();
     
     if($result===0){
       $erreur[]="les identifiants de connexion sont errones";
       setflash('les identifiants de connexion sont errones, information invalide','danger');
       save_input();
     }else{
       $result=$select->fetch();
       $_SESSION['id_user']=$result->id_user;
       $_SESSION['email']=$result->email;
       
       if($result->type=='employe'){
        redirect("Employer/index.php?id_user=".$_SESSION['id_user']);
       }
       elseif($result->type=='chef agence')
       {
        redirect("chef agence/index.php?id_user=".$_SESSION['id_user']);
         
       }else{
        redirect("direction/index.php?id_user=".$_SESSION['id_user']);
       }
      
     }
    }

   }else{
     clear();
   }
   include("connexion_view.php");
   ?>