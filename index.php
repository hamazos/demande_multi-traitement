<?php
    if(session_id() == '') {
		session_start();
	}
     
  include_once('config.php'); 
  
  if(isset($_POST['login']))  
 	{  
      $pseudo=$_POST['pseudo'];  
      $password=$_POST['password'];  
    
      $check_user="select * from users WHERE pseudo='$pseudo'AND password='$password'";  
    
      $query = $conn->query($check_user); 
    
      if(mysqli_num_rows($query)==1)  
      	{  
          $qry = mysqli_fetch_array($query);
          $_SESSION['pseudo']=$qry['pseudo'];//here session is used and value of $username store in $_SESSION.
		  $_SESSION['type']=$qry['type'];//here session is used and value of $prevelege store in $_SESSION.
		  $_SESSION['id']=$qry['id'];//here session is used and value of $id store in $_SESSION.
  
          if($qry['type']=="0")
         {
			header("location:admin/home_admin.php");
			
          }
          elseif($qry['type']=="1")
          {
            header("location:user/home_user.php");
		  } 
		  elseif($qry['type']=="2")
          {
            header("location:info/home_info.php");
		  }
		  elseif($qry['type']=="3")
          {
            header("location:RMG/home_rmg.php");
          } elseif($qry['type']=="4")
          {
            header("location:DAF/home_daf.php");
          }  
      	}  
		else  
		{  
			echo "<script>alert('username or password is incorrect!')</script>";  
		}  
  	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>demande PC Portable</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				<form class="login100-form validate-form" method="post" action="index.php">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="pseudo" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn"type="submit" value="login" name="login">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
