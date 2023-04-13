<?php

include('../asset/config/bdconnexion.php');
include("../inclusions/fonction.php");

//requete pour selectionner et afficher les bus
$bus=$db->query("SELECT  * FROM bus ");
$buss=$bus->fetchall();

if(isset($_POST['valider']))
{
  /**********on controle si tout les champs sont existes et ne sont pas vides ********/
  if(control_champ(["immatriculation","caracteristique","intitule"]))
  {
      /********on fait un extract des informations du formulaire pour eviter d'ecrire $_POST a chaque temps 
       * @param $_POST ********/
      extract($_POST);

      /*********Declaration d'une variable erreur sous forme de tableau pour recuperer tout les erreurs ********/
      $erreur = [];


        
  
        
  
        /**********on verifie si l'email entrer par l'utilisateur existe deja dans la bd
           * @param $email 
        ************/
        if(existe('bus', 'num_immatriculation', $immatriculation))
        {
            $erreur[]="cet immatriculation existe deja";
        }

        /***********on compte le nombre d'erreur ********/
        if(count($erreur) == 0)
        {
      
            //requette d'ajout dans la bd
            $insert=$db->prepare('insert into bus (intitules_bus,caracteristique_bus,num_immatriculation,statut,create_at) values(?,?,?,NOW(),"1")');
            $insert->execute([$intitule, $caracteristique,$immatriculation]);

                setflash("bus ajouter avec success");
                redirect('gestion_bus.php');
        }
        else 
        {
            save_input();
        }
    }
    else 
    {
    $erreur[]= "veuillez remplir tout les champs";
    }
   
}
else
{
    clear();
}
if(isset($_GET['id']) and isset($_GET['statut'])){
  $id_bus=$_GET['id'];
  $etat_bus=$_GET['statut'];
  
  $update=$db->prepare('update bus set statut=? where id_bus=?');
  $update->execute([$etat_bus, $id_bus]);

  redirect('gestion_bus.php');
}

if(isset($_GET['modifier'])){
  
  extract($_POST);
$_SESSION['id_bus']=$id_bus;

  /* modification generale de l'entreprise */
  $updat=$db->prepare('update bus set intitules_bus=?,caracteristique_bus=?, num_immatriculation=? where id_bus=?');
   $updat->execute([$id_bus,$intitule,$caracteristique,$immatriculation]);
   redirect('gestion_bus.php');
   

 //var_dump($etat,$id_user_rh,$domaine);
}
// }

  include("views/gestion_bus_view.php");

?>