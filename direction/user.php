<?php

include('../asset/config/bdconnexion.php');
include("../inclusions/fonction.php");


//requete pour selectionner et afficher le type des utilisateurs
$stat=$db->query("SELECT  * FROM type_user ");
$st=$stat->fetchall();

//requete pour selectionner et afficher les agences
$agence=$db->query("SELECT  * FROM agence ");
$ag=$agence->fetchall();

//requete pour selectionner et afficher les utilisateurs
$user=$db->query("SELECT  * FROM user,type_user,agence WHERE type_user.id_type_user=user.id_type_user AND agence.id_agence=user.id_agence AND user.id_type_user!=3 ");
$prep=$user->fetchall();



if(isset($_POST['valider']))
{
  /**********on controle si tout les champs sont existes et ne sont pas vides ********/
  if(control_champ(["nom","email","prenom","statut","agence"]))
  {
      /********on fait un extract des informations du formulaire pour eviter d'ecrire $_POST a chaque temps 
       * @param $_POST ********/
      extract($_POST);

      /*********Declaration d'une variable erreur sous forme de tableau pour recuperer tout les erreurs ********/
      $erreur = [];

        /**********on verifie si la longueur du nom entrer par l'utilisateur correspond a taille minimum 
         * @param $nom
        ***********/
        if(mb_strlen($nom)<3)
        {
        $erreur[]="Nom trop court (minimum 3 caracteres)";
        }

        /**********on verifie si la longueur du pseudo entrer par l'utilisateur correspond a taille minimum 
         * @param $pseudo
        **********/
        if(mb_strlen($prenom)<5 )
        {
            $erreur[]="Prenom trop court (minimum 5 caracteres)"; 
            
        }

        
  
        /**********on verifie si l'email entrer par l'utilisateur correspond a une addresse email valide
           * @param $email
        **********/ 
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
          $erreur[]= "l'adresse email n'est pas valide";
        }
  
        /**********on verifie si l'email entrer par l'utilisateur existe deja dans la bd
           * @param $email 
        ************/
        if(existe('user', 'email', $email))
        {
            $erreur[]="cet email existe deja";
        }

        /***********on compte le nombre d'erreur ********/
        if(count($erreur) == 0)
        {
            //on definit un mot de passe par defaut
            $passe = "12345678";
            /*********hashage de mot de passe **********/
            $hashpasse = SHA1($passe);
   
            /*********creation de la variable token *************/
            $token= SHA1($prenom.$email.$hashpasse);
            $image="contact-3.jpg";
            
            //requette d'ajout dans la bd
            $sql = $db->prepare("INSERT INTO user (nom, prenom,password , id_type_user, email, photo,adresse , num_telephone,id_agence) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?) ");
          $sql->execute([$nom, $prenom,$hashpasse,$statut,$email,$image,$adresse,$telephone,$agence ]);
              
            
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







  include("views/user_view.php");

?>