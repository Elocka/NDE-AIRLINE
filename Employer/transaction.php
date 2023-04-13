<?php

include('../asset/config/bdconnexion.php');
include("../inclusions/fonction.php");

//requette qui permet d'obtenir l'id de l'agence de l'user connecte
$select = $db->prepare("SELECT * FROM user,agence,type_user WHERE user.id_agence=agence.id_agence AND user.id_type_user=type_user.id_type_user AND id_user = ?");
$select->execute([$_SESSION['id_user']]);
$rs = $select->fetch();
$agences=$rs->intitule;
//requete pour selectionner et afficher les transferts de l'agence
$trans=$db->prepare("SELECT  * FROM transfert,user,agence WHERE agence.id_agence=user.id_agence AND transfert.id_user=user.id_user AND agence.id_agence=?   ");
 $trans->execute([$rs->id_agence]);

$transfert=$trans->fetchall();;
//requete pour selectionner et afficher les agences
$agence=$db->query("SELECT  * FROM agence WHERE id_agence!=$rs->id_agence ");
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
         //requette qui permet d'obtenir le nom de l'agence selectionnee dans le formulaire
$select = $db->prepare("SELECT * FROM agence WHERE  id_agence = ?");
$select->execute([$agence]);
$rts = $select->fetch();
$agence1=$rts->intitule;
        $slach='-';   
        $date = date('Y-m-d');
            		  // Génération de la référence unique
                  $reference = strtoupper($agences) . $slach. $date1 . $slach .$heure1  . $slach . strtoupper($agence1). $slach. $date2 . $slach .$heure2;
                  //requette d'ajout dans la bd
                  $sql = $db->prepare("INSERT INTO transfert (date_envoie, heure_envoie, heure_arrivee, description, id_bus, id_agence_recoit, date_reception, reference,id_user,create_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?,?)");
                $sql->execute([$date1, $heure1,$heure2,$caracteristique,$bus,$agence,$date2,$reference,$_SESSION['id_user'],$date]);
                    
            
            
                echo"transaction ajouter avec success";
                redirect('transaction.php');
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