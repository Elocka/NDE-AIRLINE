<?php 
	include('../asset/config/bdconnexion.php');
    include("../inclusions/fonction.php");

	if(isset($_POST['id_user'])){
		$id = $_POST['id_user'];
		
		

		$stmt = $bd->prepare("SELECT * FROM user WHERE id_user=:id_user");
		$stmt->execute(['id_user'=>$id]);
		$row = $stmt->fetch();
		
		

		echo json_encode($row);
	}
?>