<?php

include('../asset/config/bdconnexion.php');
include("../inclusions/fonction.php");

//requete pour selectionner et afficher les bus
$trans=$db->query("SELECT  * FROM transfert ");
$transfert=$trans->fetchall();
//requete pour selectionner et afficher les colis
$agence=$db->query("SELECT  * FROM agence ");
$ag=$agence->fetchall();
$buss=$db->query("SELECT  * FROM bus ");
$bus=$buss->fetchall();

if(isset($_POST['valider']))
{
  /**********on controle si tout les champs sont existes et ne sont pas vides ********/
  if(control_champ(["caracteristique","date1","heure1","date2","heure2","agence","bus"]))
  {
      /********on fait un extract des informations du formulaire pour eviter d'ecrire $_POST a chaque temps 
       * @param $_POST ********/
      extract($_POST);

      /*********Declaration d'une variable erreur sous forme de tableau pour recuperer tout les erreurs ********/
      $erreur = [];

        /**********on verifie si la longueur de la caracteristique entrer par l'utilisateur correspond a taille minimum 
         * @param $caracteristique
        ***********/
        if(mb_strlen($caracteristique)<10)
        {
        $erreur[]="caracteristique trop court (minimum 10 caracteres)";
        }

        

        
  
       

        /***********on compte le nombre d'erreur ********/
        if(count($erreur) == 0)
        {
           
            		  // Génération de la référence unique
		  $reference = strtoupper(substr($nom, 0, 3)) . $slach. $poids . $slach .strtoupper(substr($contact, 0, 9))  . $slach . strtoupper(substr($slug, 0, 2));
            //requette d'ajout dans la bd
            $sql = $db->prepare("INSERT INTO transfert (date_envoie, heure_envoie, heure_arrivee, description, id_bus, id_agence_recoit, date_reception, reference) VALUES (?, ?, ?, ?, ?, ?, ?, ?) ");
          $sql->execute([$date1, $heure1,$heure2,$caracteristique,$bus,$agence,$date2,$reference]);
              
            
                echo"Utilisateurs ajouter avec success";
                redirect('user.php');
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


if(isset($_GET['id_transfert']) and isset($_GET['etat'])){
  $id=$_GET['id_transfert'];
  $etat=$_GET['etat'];
  
  $update=$db->prepare('update transfert set etat=? where id_transfert=?');
  $update->execute([$etat, $id]);

  redirect('transaction.php');
}


  include("views/transaction_view.php");

?>