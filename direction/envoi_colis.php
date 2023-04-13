<?php

include('../asset/config/bdconnexion.php');
include("../inclusions/fonction.php");

//requete pour selectionner et afficher les colis
$colis=$db->query("SELECT  * FROM colis,transfert,agence WHERE colis.id_transfert=transfert.id_transfert AND agence.id_agence=colis.id_agence  ");
$prep=$colis->fetchall();

//requete pour selectionner et afficher les agences qui recoivent les colis
$colis=$db->query("SELECT  * FROM transfert,agence WHERE   transfert.id_agence_recoit=agence.id_agence");
$pres=$colis->fetchall();
//requete pour selectionner et afficher les colis
$colis=$db->query("SELECT  * FROM colis ");
$col=$colis->fetchall();

//requete pour selectionner et afficher les colis
$agence=$db->query("SELECT  * FROM agence ");
$ag=$agence->fetchall();

//requete pour selectionner et afficher les colis
$transfert=$db->query("SELECT  * FROM transfert ");
$trans=$transfert->fetchall();

if(isset($_POST['valider']))
{
  /**********on controle si tout les champs sont existes et ne sont pas vides ********/
  if(control_champ(["caracteristique","type","nom1","nom2","prenom2","prenom1","mail2","mail1","telephone2","telephone1","cni2","cni1"]))
  {
      /********on fait un extract des informations du formulaire pour eviter d'ecrire $_POST a chaque temps 
       * @param $_POST ********/
      extract($_POST);

      /*********Declaration d'une variable erreur sous forme de tableau pour recuperer tout les erreurs ********/
      $erreur = [];

      
      if(mb_strlen($caracteristique) < 10)
      {
        $erreur[] = "caracteristique trop courte(minimun 10)";
      } 
      if(mb_strlen($nom1) < 3)
      {
        $erreur[] = "nom expediteur trop court(minimun 3)";
      }
      if(mb_strlen($nom2) < 3)
                      {
                        $erreur[] = "nom recepteur trop court(minimun 3)";
                      }
                      if(mb_strlen($prenom1) < 3)
                      {
                        $erreur[] = "prenom expediteur trop court(minimun 3)";
                      }
                      if(mb_strlen($prenom2) < 3)
                      {
                        $erreur[] = "prenom recepteur trop court(minimun 3)";
                      }
                      if(mb_strlen($cni1) < 10)
                      {
                        $erreur[] = "cni expediteur trop courte(minimun 10)";
                      }
                      if(mb_strlen($cni2) < 10)
                      {
                        $erreur[] = "cni recepteur trop courte(minimun 10)";
                      }
                      if(mb_strlen($telephone1) < 9)
                      {
                        $erreur[] = "numero trop court(minimun 9)";
                        if(mb_strlen($telephone2) < 9)
                      {
                        $erreur[] = "numero trop court(minimun 9)";
                      }
                      }
   // Génération de la référence unique
   $reference = $type . $cni1  . $cni2;
        /**********on verifie si l'email entrer par l'utilisateur existe deja dans la bd
           * @param $email 
        ************/
       
        /***********on compte le nombre d'erreur ********/
        if(count($erreur) == 0)
        {
            
            
            //requette d'ajout dans la bd
            $insert=$db->prepare('insert into colis (refference,caracteristique_colis,type_colis,nom_expediteur,id_agence,nom_recepteur,prenom_recepteur,prenom_expediteur,mail_recepteur,mail_expediteur,num_recepteur,num_expediteur,num_cni_expediteur,num_cni_recepteur,id_transfert,date_creation,statut_colis) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,NOW(),"2")');
            $insert->execute([$reference, $caracteristique,$type,$nom1,$agence,$nom2,$prenom2,$prenom1,$mail2,$mail1,$telephone2,$telephone1,$cni2,$cni1,$transfert]);

              
            
                setflash("colis ajouter avec success");
                redirect('envoi_colis.php');
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
  $id_colis=$_GET['id'];
  $etat_colis=$_GET['statut'];
  
  $update=$db->prepare('update colis set statut_colis=? where id_colis=?');
  $update->execute([$etat_colis, $id_colis]);

  redirect('envoi_colis.php');
}

  include("views/envoi_colis_view.php");

?>