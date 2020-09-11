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
    <link href="../template/files/css/jquery-ui.css" rel="stylesheet" />


    <!--[if lte IE 9]>
    <![endif]-->
    <meta http-equiv="X-UA-Compatible" content="IE=9" />


    <style>
        .form-inline .form-group {

            margin-left: 10px;
        }

        .table th {

            text-align: center;
        }

        .div-table {

            margin: auto;
            width: 80%;

        }

        .myTable {
            overflow-x: scroll;
        }

        td {
            min-width: 120px;
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
                    <li class="active"><a href="../index.php">
                            <img src="../template/files/img/Acceuil.png" width="22" height="20"></a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">خدمات إلكترونية <b class="caret"></b></a>
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
                        <img src="../template/files/img/Services/H1_SuivieAffaires.png" width="100px" height="33px" />

                    </h6>
                </div>

                <div id="MainContent_Div1" style="padding: 18px; margin: 5px 0; width: 80%; font-size: 14px; color: red;">
                    <p>هذا المجال مفتوح للموطنين لتتبع طلباتهم الالكترونية</p>
                </div>

                <!------------------------- ----------START FORM------------------------->
                <div class="form-inline text-center" style="margin-bottom: 25px;">
                    <div class="form-group" class="form-inline text-center">
                        <label> رقم بالطاقة الوطنية</label>
                        <input type="text" class="form-control" id="cin" placeholder="ادخل رقم بالطاقة الوطنية">
                    </div>
                    <div class="form-group">
                        <label>الرقم السري</label>
                        <input type="text" class="form-control" id="cle" placeholder="ادخل الرقم السري">
                    </div>

                    <button onclick="search();" class="btn btn-primary">بحث</button>

                    <br><br>

                    <p id="alert" role="alert"></p>

                    <div class="myTable">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">موضوع الطلب</th>
                                    <th scope="col">تاريخ الطلب</th>
                                    <th scope="col">تاريخ المعاينة</th>
                                    <th scope="col">تاريخ المعالجة</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr id="tableDemande" class="table-success">
                                    <td id="operation"></td>
                                    <td id="date_demande"></td>
                                    <td id="date_traitement"></td>
                                    <td id="date_validation"></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>


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
                            <span>جميع الحقوق محفوظة - وزارة العدل ©<?php echo date("Y") ?>

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
    <!--  

   <input type="text" id='x'; name="">
  <button onclick="search();" class="btn btn-primary">بحث</button> -->




</body>
<script src="../template/js/jquery-1.9.1.js"></script>
<script src="../template/files/js/jquery-ui.js"></script>
<script src="../template/files/bootstrap/js/bootstrap.js"></script>
<script>
    function search() {

        let cin = document.getElementById('cin').value;
        let cle = document.getElementById('cle').value;

        if (cin.length > 0 && cle.length > 0) {

            let xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4) {
                    if (this.status == 200) {

                        if (this.responseText == "error") {

                            document.getElementById("alert").innerHTML = "Alert: " + this.responseText;
                            document.getElementById("alert").setAttribute('class', 'alert alert-danger');

                        } else if (this.responseText == "404") {

                            document.getElementById("alert").textContent = "لا يوجد هذا الطلب";
                            document.getElementById("alert").setAttribute('class', 'alert alert-danger');

                            document.getElementById("operation").textContent = "";
                            document.getElementById("date_demande").textContent = "";
                            document.getElementById("date_traitement").textContent = "";
                            document.getElementById("date_validation").textContent = "";

                        } else {

                            document.getElementById("alert").textContent = "";
                            document.getElementById("alert").setAttribute('class', '');

                            let demande = JSON.parse(this.responseText);

                            document.getElementById("operation").textContent = demande.nom;
                            document.getElementById("date_demande").textContent = demande.date_demande;
                            document.getElementById("date_traitement").textContent = demande.date_traitement;
                            document.getElementById("date_validation").textContent = demande.date_validation;

                            switch (demande.status) {
                                case 'X':
                                    document.getElementById("tableDemande").setAttribute('class', 'table table-sm table-danger');
                                    break;
                                case 'O':
                                    document.getElementById("tableDemande").setAttribute('class', 'table table-sm table-warning');
                                    break;
                                case 'V':
                                    document.getElementById("tableDemande").setAttribute('class', 'table table-sm table-success');
                                    break;
                            }

                        }
                    }
                }
            };
            xmlhttp.open('POST', `../config/suivi_demande.php`, true);

            let formData = new FormData();
            formData.append('cin', cin);
            formData.append('cle', cle);

            xmlhttp.send(formData);
        } else {
            document.getElementById("alert").textContent = "المرجوا ادخال المعلومات الضرورية";
            document.getElementById("alert").setAttribute('class', 'alert alert-danger');
        }

    }
</script>






</html>