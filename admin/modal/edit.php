<?php
	include_once('../config.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$pseudo = $_POST['pseudo'];
		$password = $_POST['password'];
		$type = $_POST['type'];
		
		$sql = "UPDATE `users` SET `fname`='$nom',`lname`='$prenom',`pseudo`='$pseudo',`password`='$password',`type`='$type' WHERE id = '$id'";
		
		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: ../add_user.php');

?>