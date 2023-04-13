<!-- modifier photo -->

<?php
	 include('../asset/config/bdconnexion.php');
	 include("../inclusions/fonction.php");

	

	if(isset($_POST['ph'])){
		
		$photo = $_FILES['photo']['name'];
		if(!empty($photo)){
				move_uploaded_file($_FILES['photo']['tmp_name'], './../asset/images/image_directeur/'.$photo);
				$filename = $photo;	
			}
			else{
				$filename = $admin['photo'];
			}

			

			
				$stmt = $db->prepare("UPDATE user SET photo=:photo WHERE id_user=:id_user");
				$stmt->execute(['photo'=>$filename, 'id_user'=>$_SESSION['id_user']]);

				$_SESSION['success'] = 'Account updated successfully';
			
			
		
	}
	else{
		$_SESSION['error'] = 'Fill up required details first';
	}

	header('location:profil.php');

?>

