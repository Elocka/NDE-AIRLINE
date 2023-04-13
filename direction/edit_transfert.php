<?php
	include('../asset/config/bdconnexion.php');
    include("../inclusions/fonction.php");

	if(isset($_POST['modifier'])){
        $id = $_POST['id_transfert'];
		$date1 = $_POST['date3'];
		$caract = $_POST['caracteristique'];
        $heure1 = $_POST['heure3'];
        $date2 = $_POST['date4'];
        $heure2 = $_POST['heure4'];

		

		
			$stmt = $db->prepare("UPDATE transfert SET date_envoie=:date_envoie , heure_envoie=:heure_envoie , heure_arrivee=:heure_arrivee , description=:description , date_reception=:date_reception WHERE id_transfert=:id_transfert");
			$stmt->execute(['date_envoie'=>$date1,'heure_envoie'=>$heure1, 'heure_arrivee'=>$heure2, 'description'=>$caract, 'date_reception'=>$date2, 'id_transfert'=>$id]);
			
	
    }

	header('location: transaction.php');

?>