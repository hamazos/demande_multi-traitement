
  <?php

  ?>
  <body>
  <?php 
  $id_employee=isset($_SESSION['id_employee'])? $_SESSION['id_employee'] : 0 ;
      ?>
                 <h4 class="mb-2">all departements</h4>
                  <form class="form-inline" method="POST" >
                        
                        <div class="mb-2 mx-2">
                     
                        <table class="table">
                           <thead class="text-light text-center">
                               <th >id</th>
                               <th>Nom</th>
                               <th>Action</th>
                           </thead>
                           <tbody>
                           <?php 
                           include_once("../config/connect.php");
                           $sql="SELECT DISTINCT departements.* FROM `employes`,`departements`,`responsables` WHERE  departements.id=responsables.id_departement AND responsables.id_employe=$id_employee";
                        $stmt = $conn->query($sql);
                        while($departements=$stmt->fetch(PDO::FETCH_OBJ)){
                            echo '<tr>
                                    <td><input value="'.$departements->id.'" class="text-center" readonly></td>
                                    <td><input value="'.$departements->nom.'" class="text-center " readonly></td>
                                    <td>
                                        <a class="btn btn-warning text-light" href="?page=Demandes&id_departement='.$departements->id.'">Show les demmande </a>
                                    </td>
                                 </tr>';
                        }
                        ?>
                           </tbody>
                        </table>        
                 </form>