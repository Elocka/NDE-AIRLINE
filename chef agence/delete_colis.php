<?php

include('../asset/config/bdconnexion.php');
include("../inclusions/fonction.php");

 


	if(isset($_POST['delete'])){
		$id = $_POST['id_colis'];
		
	

		
			$stmt = $db->prepare("DELETE FROM colis WHERE id_colis=:id_colis");
			$stmt->execute(['id_colis'=>$id]);

			echo 'colis supprime avec success';
		}
		
	else{
		echo'Select category to delete first';
	}

	header('location: envoi_colis.php');
	
?>