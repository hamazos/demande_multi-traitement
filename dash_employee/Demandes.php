
<?php 

$id_departement=isset($_GET['id_departement'])? $_GET['id_departement'] : null ;
?>

<h4 class="mb-2">all demmandes</h4>
                  <form class="form-inline" method="POST" >
                        
                        <div class="mb-2 mx-2">
                     
                        <table class="table">
                           <thead class="text-light text-center">
                           <th>Status</th>
                           <th>date traitement</th>
                           <th>date validation</th>
                           </thead>
                           <tbody>
                           <?php 
                        include_once("../config/connect.php");
                        $sql="SELECT DISTINCT demandes.* FROM `demandes`,`operations`,`departements` WHERE demandes.id_operation=operations.id AND operations.id_departement=$id_departement";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        while($demandes=$stmt->fetch(PDO::FETCH_OBJ)){
                            echo '<tr>
                                    <td><input value="'.$demandes->status.'" class="text-center" readonly></td>
                                    <td><input value="'.$demandes->date_traitement.'" class="text-center " readonly></td>
                                    <td><input value="'.$demandes->date_validation.'" class="text-center " readonly></td>
                                 </tr>';
                        }
                        ?>
                           </tbody>
                        </table>        
                 </form>
                    </div>
                    <script>
                        
                    </script>