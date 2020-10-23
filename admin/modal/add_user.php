<?php
	include_once('../config.php');

	if(isset($_POST['add'])){
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$pseudo = $_POST['pseudo'];
		$password = $_POST['password'];
		$type = $_POST['type'];
		$sql = "INSERT INTO `users`(`fname`, `lname`, `pseudo`, `password`, `type`)
				VALUES ('$nom', '$prenom', '$pseudo', '$password ', '$type')";
		echo $sql;
		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: ../add_user.php');
?>