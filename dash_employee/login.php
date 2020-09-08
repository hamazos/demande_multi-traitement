<?php

if(isset($_POST['submit']))


{
  if(empty($_POST['nom']) || empty($_POST['password']))
  {
    $message = '<div class="alert alert-danger">remplir les champs svp :)</div>';
  }
  else
  {
    include_once("../config/connect.php");
    $sql = " SELECT * FROM employes WHERE nom =:nom AND mdp= :mdp";
    $stmt= $conn->prepare($sql);
    $stmt->execute(array(
      'nom'=>$_POST['nom'],
      'mdp'=>$_POST['password']
    ));
    $employee=$stmt->fetch(PDO::FETCH_ASSOC);
    $count= $stmt->rowCount();
    if($count > 0)
    {
      session_start();
      $_SESSION['logemployee']= true;
      $_SESSION['id_employee']=$employee['id'];
      $_SESSION['username']=$employee['nom'];
      header("location: ../dash_employee");
    }
    else
    {
      $message = '<div class="alert alert-danger">email ou mot de passe est incorrect :)</div>';
    }
  }
}
?>
<!DOCTYPE html>

<html lang="ar">

<head>
 <title>تسجيل الدخول</title>
 <meta charset="utf-8" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<meta http-equiv="content-type" content="text/html" />
<link href="../template/files/css/style_ar.css" rel="stylesheet" />
<link href="../template/files/bootstrap/css/bootstrap.css" rel="stylesheet" />
<link rel="icon" type="image/png" href="../../../App_Themes/Default/Images/favicon.png" />
<link rel="shortcut icon" type="image/x-icon" href="../../../App_Themes/Default/ar/img/favicon.html" />
<link href="../template/files/css/jquery-ui.css" rel="stylesheet"/>

    
    <!--[if lte IE 9]>
    <![endif]-->
    <meta http-equiv="X-UA-Compatible" content="IE=9" />


    <style>
        html {
            height: 100%;
        }
      
        body {
            background: #fdfdfd url(../template/files/img/back_Container.jpg) repeat-x;
            background-size: 110px;
            height: 100%;
        }

     .container img {
             margin:auto;
         }
         
         .container h1 {
             margin-bottom: 40px;
             color: #16765c;

         }



         .form-signin {
  max-width: 600px;
  height:400px;
  padding: 15px;
  margin: 10px auto;
  background-color:white;
  border-radius: 20px;
  padding: 13px 10px;
  
}


.form-signin input {
  
  height:52px;
  border-radius: 20px;
 
}

.form-signin h2 {
  
  margin-bottom:43px;
 
}
.btn-sub{

    display: block;
    margin: auto;
    border:1px solid #16765c;;
    border-radius: 20px;
    color: white;
    background-color: #16765c;
    padding: 9px 28px;
    font-size:22px;

}
  
 @media screen and (max-width: 300px) {
  .btn-sub{

    
    border-radius: 20px;
    padding: 6px 20px;
    font-size:19px;

}
.form-signin h2 {
  
  font-size: 21px;
 
}

.container h1 {
  font-size: 25px;

         }

}
    </style>

</head>
<body dir="rtl">
<?php
if(isset($message))
{
  echo $message;
}
?>
    <div class="container">
                <img src="../template/files/img/Logo-justice.png" class="img-responsive" />
                <h1 class= text-center>قضاءالاسرة</h1>        
<div class="col-sm-12 ">
      <form class="form-signin" method="POST" action="">

        <h2 class= text-center>تسجيل الدخول</h2>

        <div class="form-group text-center ">
              <label >البريد الالكتروني </label>
              <input type="text" class="form-control" placeholder="ادخل البريد الالكتروني" name="nom">
       </div>
       <div class="form-group text-center">
           <label >كلمة السر</label>
           <input type="password" class="form-control"  placeholder="ادخل كلمة السر" name="password">
      </div>
  
  <button type="submit" name="submit" class=" btn-sub">ادخل</button>
</form>


 </div>         
    </div>


    
</body>
<script src="../template/js/jquery-1.9.1.js"></script>
<script src="../template/files/js/jquery-ui.js" ></script>
<script src="../template/files/bootstrap/js/bootstrap.js"></script>
</html>
