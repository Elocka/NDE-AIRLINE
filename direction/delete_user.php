<?php
	include('../asset/config/bdconnexion.php');
    include("../inclusions/fonction.php");
	if(isset($_POST['delete'])){
		$id = $_POST['id_user'];
		
		

		
			$stmt = $db->prepare("DELETE FROM user WHERE id_user=:id_user");
			$stmt->execute(['id_user'=>$id]);

			echo'utilisateur supprimer';

	}
	else{
		echo 'utilisateur pas supprimer';
	}

	header('location: user.php');
	
?>