<?php 
       if(isset($_POST['submit'])){
        include_once("../config/connect.php");
        $department = $_POST['department'];

        try{

        // Insertion depatement

            $sql = "INSERT INTO departements (nom)
            VALUES (?)";

            $stmt = $conn->prepare($sql);
            $stmt->execute(array($department));
            if($stmt){
            $stmt = $conn->prepare($sql);
            $stmt->execute(array($department));
                echo '<div class="alert alert-success text-center">department ajoute :)</div>';
            }
        }
        catch(PDOException $e){
            echo 'error' .$e->getMessage();

        }
        

    }
      ?>
<h4 class="mb-2">add new department</h4>
                  <form class="form-inline" method="POST" action="?page=adddepartment">
                        <div class="form-group mb-2 mx-2">
                            <input dir="rtl" type="text" name="department" class="form-control" id="staticEmail2" placeholder="إسم الخدمة">
                        </div>
                        
                        <button type="submit" name="submit" class="btn btn-primary mb-2 ">ajoute</button>
                 </form>
                 