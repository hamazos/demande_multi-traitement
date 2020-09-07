<?php 

include('includesadmin/header.php');

       if(isset($_POST['submit'])){
        include_once("../config/connect.php");
        $department = $_POST['departement'];
        $id = $_GET['id'];
            
        try{
            $sql = "UPDATE departements SET nom=? WHERE id=?";
            $stmt= $conn->prepare($sql);
            $stmt->execute(array($department, $id));
            if($stmt){

                header('Location:index.php?page=alldepartement');

            }
        }catch(PDOException $e){

            echo 'error' .$e->getMessage();

        }
    }

?>
    
        <form class="form-inline" method="POST" >
            
            <div class="mb-2 mx-2">
            
            <?php 
                include_once("../config/connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM departements WHERE id = $id";
                $stmt = $conn->query($sql);
                $department=$stmt->fetch(PDO::FETCH_OBJ);
                echo '<input type="text" name="departement" value="'.$department->nom.'">'
            ?>
                <button class="btn btn-warning" type="submit" name="submit">update</button>
        </form>
                       
                        
