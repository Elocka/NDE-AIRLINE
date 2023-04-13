
<!-- modif mot de passe -->

<?php
	include('../asset/config/bdconnexion.php');
	include("../inclusions/fonction.php");
	
		$select = $db->prepare("SELECT * FROM user,agence,type_user WHERE user.id_agence=agence.id_agence AND user.id_type_user=type_user.id_type_user AND id_user = ?");
		$select->execute([$_SESSION['id_user']]);
		$rs = $select->fetch();
	
		
	
		
		
			
	 
	if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'profil.php';
	}

	if(isset($_POST['pw'])){
		$curr_password = $_POST['curr_password'];
		
		$password = $_POST['password'];
		
		if(password_verify($curr_password, $rs->password)){
			

			if($password ==  $rs->password){
				$password =  $rs->password;
			}
			else{
				$password =  SHA1($password);
			}

			

			
				$stmt = $conn->prepare("UPDATE user SET  password=:password WHERE id_user=:id_user");
				$stmt->execute([ 'password'=>$password, , 'id_user'=>$_SESSION['id_user']]);

				$_SESSION['success'] = 'Mot de Passe modifier avec succes';
			
			
		}
		else{
			$_SESSION['error'] = 'Incorrect mot de passe';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up required details first';
	}

	header('location:'.$return);

?>

