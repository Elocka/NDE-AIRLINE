<?php
	include('../asset/config/bdconnexion.php');
    include("../inclusions/fonction.php");

	if(isset($_POST['modifier'])){
        $id = $_POST['id_bus'];
		$inti = $_POST['intitule'];
		$caract =$_POST['caracteristique'];
        $imma = $_POST['immatriculation'];

		

		
			$stmt = $db->prepare("UPDATE bus SET intitules_bus=:intitule_bus , caracteristique_bus=:caracteristique_bus , num_immatriculation=:num_immatriculation WHERE id_bus=:id_bus");
			$stmt->execute(['intitules_bus'=>$inti,'caracteristique_bus'=>$caract, 'num_immatriculation'=>$imma, 'id_bus'=>$id]);
			
	
    }

	header('location: gestion_bus.php');

?>