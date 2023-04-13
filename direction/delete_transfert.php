<?php

include('../asset/config/bdconnexion.php');
include("../inclusions/fonction.php");

 


	if(isset($_POST['delete'])){
		$id = $_POST['id_transfert'];
		
	

		
			$stmt = $db->prepare("DELETE FROM transfert WHERE id_transfert=:id_transfert");
			$stmt->execute(['id_transfert'=>$id]);

			echo 'transfert supprime avec success';
		}
		
	else{
		echo'Select category to delete first';
	}

	header('location: gestion_bus.php');
	
?>