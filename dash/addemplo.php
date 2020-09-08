
  <?php

  ?>
  <body>
  <?php 
   $id=isset($_SESSION['id'])? $_SESSION['id'] : 0 ;

       if(isset($_POST['submit'])){
        include_once("../config/connect.php");
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $password = $_POST['password'];
        try{

        // Insertion employe

            $sql = "INSERT INTO employes (nom, username, mdp , id_admin)
            VALUES (?,?,?,?)";

            $stmt = $conn->prepare($sql);
            $stmt->execute(array($nom,$prenom,$password,$id));
            if($stmt){
                echo '<div class="alert alert-success text-center">employe ajoute :)</div>';
            }
        }
        catch(PDOException $e){
            echo 'error' .$e->getMessage();

        }

    }
      ?>
                  <h4 class="mb-2">add new user</h4>
                  <form class="form-inline" method="POST" action="?page=addemplo">
                        <div class="form-group mb-2 mx-2">
                            <input type="text" name="nom" class="form-control" id="staticEmail2" placeholder="nom">
                        </div>
                        <div class="form-group mb-2 mx-2">
                            <input type="text" name="prenom" class="form-control" id="staticEmail2"  placeholder="prenom">
                        </div>
                       
                        <div class="form-group mx-sm-3 mb-2 mx-2">
                            <input type="password" class="form-control" id="inputPassword2" placeholder="Password" name="password">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary mb-2">ajoute</button>
                 </form>
                
                 <h4 class="mb-2">all employes</h4>
                  <form class="form-inline" method="POST" >
                        
                        <div class="mb-2 mx-2">
                     
                        <table class="table">
                           <thead class="text-light text-center">
                               <th >Nom</th>
                               <th>username</th>
                           </thead>
                           <tbody>
                           <?php 
                           include_once("../config/connect.php");
                        $sql = "SELECT * FROM employes where id_admin=$id";
                        $stmt = $conn->query($sql);
                        while($employes=$stmt->fetch(PDO::FETCH_OBJ)){
                            echo '<tr>
                                    <td><input value="'.$employes->nom.'" class="text-center" readonly></td>
                                    <td><input value="'.$employes->username.'" class="text-center " readonly></td>
                                 </tr>';
                                 
                               //  SELECT demandes.* FROM `demandes`,`operations`,`departements` WHERE demandes.id_operation=operations.id AND operations.id_departement= departements.id
                        }
                        ?>
                           </tbody>
                        </table>        
                 </form>