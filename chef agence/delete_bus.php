<?php

include('../asset/config/bdconnexion.php');
include("../inclusions/fonction.php");

 


	if(isset($_POST['delete'])){
		$id = $_POST['id_bus'];
		
	

		
			$stmt = $db->prepare("DELETE FROM bus WHERE id_bus=:id_bus");
			$stmt->execute(['id_bus'=>$id]);

			echo 'bus supprime avec success';
		}
		
	else{
		echo'Select category to delete first';
	}

	header('location: gestion_bus.php');
	
?>