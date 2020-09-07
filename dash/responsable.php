<?php 
       if(isset($_POST['submit'])){
        include_once("../config/connect.php");
        $department = $_POST['departement'];
        $responsable = $_POST['responsable'];
        
        try{

        // Insertion responsable

            $sql = "INSERT INTO responsables (id_employe,id_departement)
            VALUES (?,?)";

            $stmt = $conn->prepare($sql);
            $stmt->execute(array($responsable,$department));
            if($stmt){
                echo '<div class="alert alert-success text-center">responsable ajoute :)</div>';
            }
        }
        catch(PDOException $e){
            echo 'error' .$e->getMessage();

        }
        

    }
      ?>
<h4 class="mb-2">add new responsable</h4>
                  <form class="form-inline" method="POST" action="?page=responsable">
                        
                        <div class="mb-2 mx-2">
                            <select class="form-control" name="departement">
                            <?php 
                        include_once("../config/connect.php");
                        $sql = "SELECT * FROM departements";
                        $stmt = $conn->query($sql);
                        while($department=$stmt->fetch(PDO::FETCH_OBJ)){
                            echo '<option value="'.$department->id.'">'.$department->nom.'</option>';
                        }
                            echo '</select>
                        
                      
                            <select class="form-control" name="responsable">';
                             
                        
                        $sql = "SELECT * FROM employes";
                        $stmt = $conn->query($sql);
                        while($employe=$stmt->fetch(PDO::FETCH_OBJ)){
                            echo '<option value="'.$employe->id.'">'.$employe->username.'</option>';
                        }
                        echo '</select>';
                        ?>
                        </div>
                        
                        <button type="submit" name="submit" class="btn btn-primary mb-2">ajoute</button>
                 </form>