<?php
	include('../asset/config/bdconnexion.php');
  

	if(isset($_POST['modify'])){
		$id = $_POST['id_user'];
		$statut = $_POST['statut'];
		$agence =$_POST['agence'];
       
		

		
			$stmt = $db->prepare("UPDATE user SET id_type_user=:id_type_user , id_agence=:id_agence WHERE id_user=:id_user");
			$stmt->execute(['id_type_user'=>$statut,'id_agence'=>$agence, 'id_user'=>$id]);
			
	
    }

	header('location: user.php');

?>