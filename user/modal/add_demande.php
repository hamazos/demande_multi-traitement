<?php
	include_once('../config.php');

	if(isset($_POST['add'])){
        $titre = $_POST['titre'];
        $id_user=$_SESSION['id'];
        $pseudo=$_SESSION['pseudo'];
		$sql = "INSERT INTO `demande`(`id_user`, `titre`, `statut`, `demandeur`, `date_ouverture`, `date_retoure`, `verif_Info`, `verif_RMG`, `verif_DAF`)
				VALUES ($id_user, '$titre', 0, '$pseudo', NOW(), NULL, 0, 0,0)";
		
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

	header('location: ../home_user.php');
?>