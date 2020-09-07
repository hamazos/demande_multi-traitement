
<h4 class="mb-2">all depatement</h4>
                  <form class="form-inline" method="POST" >
                        
                        <div class="mb-2 mx-2">
                     
                        <table class="table">
                           <thead class="text-light text-center">
                               <th >id</th>
                               <th>name</th>
                               <th>action</th>
                           </thead>
                           <tbody>
                           <?php 
                        include_once("../config/connect.php");
                        $sql = "SELECT * FROM departements";
                        $stmt = $conn->query($sql);
                        while($department=$stmt->fetch(PDO::FETCH_OBJ)){
                            echo '<tr>
                                    <td><input value="'.$department->id.'" class="text-center" readonly></td>
                                    <td><input value="'.$department->nom.'" class="text-center " readonly></td>
                                    <td>
                                        <a class="btn btn-danger text-light" href="delete.php?id='.$department->id.'">delete</a>
                                        <a class="btn btn-warning text-light" href="update.php?id='.$department->id.'">update</a>
                                    </td>
                                 </tr>';
                        }
                        ?>
                           </tbody>
                        </table>        
                 </form>
                    </div>
                    <script>
                        
                    </script>