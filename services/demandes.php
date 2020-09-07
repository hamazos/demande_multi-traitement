
<!DOCTYPE html>
<html lang="ar">

<head id="Head1">
 <title>محاكم</title>
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
    

    .form-inline  {
 
 margin-bottom: 15px;
 
}
    .form-inline .form-group {
 
    margin-right: 10px;
    
}
.form-2{

    margin-top: 25px;
}

.inp{

    margin-bottom: 15px;
    
}
    </style>
</head>
<body dir="rtl">
  



        <div class="container">
                    <!------------------------- ----------START HEADER------------------------->

            <div class="header banner">
                <a href="../index.php">
                    <img class="logo col-lg-3 col-sm-3 col-xs-6" src="../template/files/img/logo.png" />
                </a>
                <a href="../index.php">
                    <img src="../template/files/img/Logo_mahakim.png" class="ban logoMahakim col-lg-3 col-sm-3 col-xs-6" />
                    <div class="clear">
                    </div>
                </a>
            </div>
                    <!------------------------------------END HEADER------------------------->




                     <!-----------------------------------START MENU------------------------->
                          
                     
            <div id="menu" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse navbar-responsive-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active" ><a href="../index.php">
                            <img src="../template/files/img/Acceuil.png" width="22" height="20"></a></li>
                        <li class="dropdown" ><a href="#" class="dropdown-toggle" data-toggle="dropdown">خدمات إلكترونية <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="demandes.php">انشاء طلب</a></li>
                                <li><a href="suivi_demande.php">تتبع الطلبات</a></li>
				
                            </ul>
                            <li><a href="../login/index.php">تسجيل الدخول</a></li>
                            <li><a href="">إرشادات</a></li>
                          
                            <li><a href="contactez-nous.php">إتصل بنا</a></li>
                        </li>
                        
                     
                    
                </div>
            </div>

            
                     <!-----------------------------------END MENU------------------------->

 <div class="bodyPage">
    <div class="contentbody">
                    
    <div class="titlePage">
        <h6>
            <!-- <img src="../template/files/img/Services/H1_ContactezNous.png"
                width="100px" height="33px" /> -->
        </h6>
    </div>
    
        <div id="MainContent_Div1" style="padding: 18px; margin: 5px 0; width: 80%; font-size: 14px; color: red;">
            <p>هذا المجال مفتوح للموطنين لانشاء الطلبات الإلكترونية لوزارة العدل و الحريات</p>
        </div>

        <!------------------------- ----------START FORM------------------------->

        <div id="alert"></div>
        <form  class="form-inline text-center ">
  
  <div class="form-group">


    <label >ادخل رقم بالطاقة الوطنية</label>

    </label>
    <input type="text" name="cin" id="cin" class="form-control" placeholder="ادخل رقم بالطاقة الوطنية">
  </div>
  <button type="submit" onclick="VerifierCitoyen();"  class="btn btn-primary id_cart">ارسال </button>
</form>


 <div class="form-2 form-inline text-center">

    
        <div class="form-group ">
          <label >الاسم</label>
          <input type="text" name="nom" id="nom" class="form-control inp "  placeholder="الاسم">
        </div>
        <div class="form-group">
          <label >النسب </label>
          <input type="text" name="prenom" id="prenom" class="form-control inp" Placeholder="النسب">
        </div><br>
        

        <div class="form-group">
            <label >الهاتف</label>
            <input type="tel" name="tel1" id="tel1" class="form-control inp"  placeholder="الهاتف">
          </div>
          <div class="form-group">
            <label > 2 الهاتف </label>
            <input type="tel" name="tel2" id="tel2" class="form-control inp" placeholder="2 الهاتف ">
          </div><br>
          <div class="form-group">
            <label > البريد الالكتروني </label>
            <input type="email" name="mail" id="email" class="form-control inp" placeholder="البريد الالكتروني  ">
          </div><br>
          <div class="form-group">
            <label >الطلب</label>
            <select name="departement" id="operations"  class="form-control inp">
            <?php 
                 include_once("../config/connect.php");
                 $sql = "SELECT * FROM departements";
                 $stmt = $conn->query($sql);
                 while($department=$stmt->fetch(PDO::FETCH_OBJ)){
                     echo '<option value="">'.$department->nom.'</option>';
                 }
                ?>
                 
            </select>
          </div>
         

        <button onclick="Envoyer();"   class="btn btn-primary inp">ارسال </button>
     
    </div>
 </div>


              <!--------------------------------START display securiteKEY -------------------------------------->
   <div class="">
   	


   </div>

           <!--------------------------------End display securiteKEY -------------------------------------->





            <!-----------------------------------END FORM------------------------->


              
            <div class="clear"> </div>
              <!-----------------------------------START FOOTER------------------------->

            <div class="footer">
                <div class="footer_Links col-lg-9">
                    <div class="bloc drh col-lg-3 col-sm-3 col-xs-6">
                        <h6>الموارد البشرية</h6>
                        <ul>
                            <li>القضاة</li>
                            <li>موظفو كتابة الضبط</li>
                            <li>التكوين و التأهيل</li>
                            <li>الحوارات القطاعية</li>
                        </ul>
                    </div>
                    <div class="bloc renouvlement col-lg-3 col-sm-3 col-xs-6">
                        <h6>التحديث</h6>
                        <ul>
                            <li>الشبكة و العتاد المعلوماتي</li>
                            <li>تطوير و إستغلال البرامج</li>
                            <li>التكوين و المواكبة</li>
                            <li>خدمات عن بعد</li>
                        </ul>
                    </div>
                    <div class="bloc budget col-lg-3 col-sm-3 col-xs-6">
                        <h6>الميزانية</h6>
                        <ul>
                            <li>أرقام و بيانات</li>
                            <li>المراقبة</li>
                        </ul>
                    </div>

                    <div class="bloc col-lg-3 col-sm-3 col-xs-6">
                        <h6>البنية التحتية</h6>
                        <ul>
                            <li>محاكم جديدة</li>
                            <li>محاكم في طور الإنجاز</li>
                            <li>تجهيزات</li>
                            <li>مشاريع مستقبلية</li>
                        </ul>
                    </div>

                    <div class="footer_sepHoriz col-lg-12">
                       <span>جميع الحقوق محفوظة - وزارة العدل  ©<?php echo date("Y") ?>

                    </div>
                </div>
                <div class="footer_phoneNumber col-lg-3">
                    <img src="../template/files/img/logo_number.png" />
                </div>
            </div>
                          <!-----------------------------------START FOOTER------------------------->

        </div>
    </div>
</div>
 







</body>
<script src="../template/js/jquery-1.9.1.js"></script>
<script src="../template/files/js/jquery-ui.js" ></script>
<script src="../template/files/bootstrap/js/bootstrap.js"></script>
<script>



$(document).ready(function () {
    $('.form-2').hide();
});
 $('.id_cart').click(function (e) { 
     e.preventDefault();
     $('.form-2').show();
  
 });


// start fetch operation data

  window.onload  = function GetOperations(){

       let get = 'GetOperations';
  
       let xhttp = new XMLHttpRequest();
       xhttp.open("POST", "../config/demandes.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhttp.onload = function() {

     let data =JSON.parse(this.responseText);

         
           oper(data);

 
    }
  
  xhttp.send("function="+get);


  }


     function oper(data){
      
      var  output = "";

     
  

  
     
    }
     








//start VerifierCitoyen

   function VerifierCitoyen(){

      let val= document.getElementById('cin').value;



    if(val != ""){


      
       console.log(val);
       let cin = 'VerifierCitoyen';
  
       let xhttp = new XMLHttpRequest();
       xhttp.open("POST", "../config/demandes.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhttp.onload = function() {

     let data =JSON.parse(this.responseText);
     

        
           da(data);

 
    }
  
  xhttp.send("function="+cin+"&cin="+val);
      
      }else{

        alert("error");
      }

  }


     function da(data){
      


     if(data =="404") {
   
      document.getElementById('alert').innerHTML='<p class="bg-danger text-center" style="font-size:20px;height:40px ">Enter votre info</p>'
      document.getElementById('nom').value= "";
       document.getElementById('prenom').value= "";
       document.getElementById('tel1').value= "";
       document.getElementById('tel2').value= "";
      document.getElementById('email').value="";

     }else{

   document.getElementById('nom').value= data.nom;
       document.getElementById('prenom').value= data.prenom;
       document.getElementById('tel1').value= data.tel1;
       document.getElementById('tel2').value= data.tel2;
      document.getElementById('email').value=data.mail;

     }

      
      


        

             }






//insert data to database




 function Envoyer(){
       let fun = 'EnvoyerDemande';
      let Cin= document.getElementById('cin').value;
       let nom =document.getElementById('nom').value;
       let prenom= document.getElementById('prenom').value;
       let tel1 =document.getElementById('tel1').value;
       let tel2 =document.getElementById('tel2').value;
       let mail =document.getElementById('email').value;
       console.log(Cin,nom,prenom,tel1,tel2,mail);
 

    if(Cin != "" && nom != "" && prenom != "" && tel1 != "" ){
      
  
       let xhttp = new XMLHttpRequest();
       xhttp.open("POST","../config/demandes.php", true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhttp.onload = function() {

     
       console.log(this.responseText);
        
          

 
    }
  
  xhttp.send("function="+fun+"&cin="+Cin+"&nom="+nom+"&prenom="+prenom+"&tel1="+tel1+"&tel2="+tel2+"&mail="+mail+"&req=insert&operation=marriage");
  console.log("sucess");
      
      }else{

        alert("error");
      }

  }




  let get = window.location.pathname;

    let change = get.replace('.php','')

 console.log(change);


 // function Envoyer(){
       
 //       let nom =document.getElementById('nom').value;
 //       let prenom= document.getElementById('prenom').value;
 //       let tel1 =document.getElementById('tel1').value;
 //       let tel2 =document.getElementById('tel2').value;
 //       let mail =document.getElementById('email').value;
 //       console.log(nom,prenom,tel1,tel2,mail);
 // }





</script>

</html>
