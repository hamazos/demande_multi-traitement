<?php

include_once('connect.php');

if (isset($_POST['cin']) && isset($_POST['key'])){

       $cin= '%'.$_POST['cin'].'%';
       $key= '%'.$_POST['key'].'%';
   
     
                                    
     $stmt = $conn->prepare("SELECT demandes.status FROM demandes INNER JOIN citoyens ON demandes.id_citoyen = citoyens.id where citoyens.cin LIKE ? AND  citoyens.id LIKE ? ");
   $stmt->execute(array($cin,$key));
    $resulat = $stmt->fetchAll(PDO::FETCH_ASSOC);


     $count = $stmt->rowCount();

     if ($count > 0) {
       
     if ($resulat[0]["status"] == "active"){
       echo '<div class="div-table">   
<table class="table  table-bordered table-hover text-center " >
<tr>
<th class="info">ghhd</th>
<th class="info">fffgtgg</th>
<th class="info">fffgtgg</th>
</tr>
<tr>
  <td class="info">jjhhj</td>
  <td class="info">hj,j,h,j</td>
  <td class="info">hj,j,h,j</td>
</tr>
</table>
</div>';
     }
     
     }else{

      
     }



    



}

    