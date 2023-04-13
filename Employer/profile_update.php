<?php
	include('../asset/config/bdconnexion.php');
	include("../inclusions/fonction.php");

	if(isset($_POST['modif-p'])){
		
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$situation = $_POST['situation'];
		$sexe = $_POST['sexe'];
		$email = $_POST['mail'];
		
		
		$contact = $_POST['tel'];
		$adress = $_POST['adresse'];
		
		
		
			$stmt = $db->prepare("UPDATE user SET nom=:nom,prenom=:prenom,email=:email,adresse=:adresse, num_telephone=:num_telephone,situation_matrimoniale=:situation_matrimoniale,sexe=:sexe WHERE id_user=:id_user");
			$stmt->execute([ 'nom'=>$nom, 'prenom'=>$prenom,'email'=>$email, 'adresse'=>$adress, 'num_telephone'=>$contact, 'situation_matrimoniale'=>$situation, 'sexe'=>$sexe, 'id_user'=>$_SESSION['id_user']]);
			$_SESSION['success'] = 'modifier avec succes';

		
	}
	else{
		$_SESSION['error'] = 'Fill up edit user form first';
	}

	header('location: profil.php');

?>

