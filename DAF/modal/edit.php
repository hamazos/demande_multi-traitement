<?php
	include_once('../config.php');

	if(isset($_POST['edit'])){
		$id_demande = $_POST['id_demande'];
		$verif_DAF = $_POST['verif_DAF'];

		if($verif_DAF==1){
			$sql = "UPDATE `demande` SET `statut`=1,`verif_DAF`='$verif_DAF',`verif_Info`=2,`verif_RMG`=2 WHERE id_demande = '$id_demande'";
		}elseif($verif_DAF==2){
			$sql = "UPDATE `demande` SET `statut`=2,`verif_DAF`='$verif_DAF',`verif_Info`=3,`verif_RMG`=3 WHERE id_demande = '$id_demande'";
		}

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

	header('location: ../home_daf.php');

?>