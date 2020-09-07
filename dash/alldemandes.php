<?php 
include_once("includesadmin/header.php");?>
<body>
<?php 
$id_employe=isset($_GET['id_employe'])? $_GET['id_employe'] : null ;
function departementDemande($id_departement,$conn){
    $sql=" SELECT DISTINCT demandes.* FROM `demandes`,`operations`,`departements` WHERE demandes.id_operation=operations.id AND operations.id_departement=$id_departement";
    $stmt = $conn->prepare($sql);
      $stmt->execute();
      $demandes = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $demandes;
}
?>
    <nav
      class="navbar navbar-expand-lg  fixed-top"
    >
    <!-- navbar-dark bg-mattBlackLight  -->
      <button class="navbar-toggler sideMenuToggler" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#"><i class="material-icons icon">
      dashboard  
                </i>dashboard</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle p-0"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i class="material-icons icon">
                person
              </i>
              <span class="text">Account</span>
            </a>
            <div
              class="dropdown-menu dropdown-menu-right"
              aria-labelledby="navbarDropdown"
            >
              
              <a class="dropdown-item" href="#">hi :) <?php print_r($_SESSION['username']);?></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php">Logout</a>

            </div>
          </li>
        </ul>
      </div>
    </nav>


    <div class="wrapper d-flex">
      <div class="sideMenu bg-mattBlackLight">
        <div class="sidebar">
          <ul class="navbar-nav">
           
            <li class="nav-item">
              <a href="?page=addemplo" class="nav-link px-2">
                <i class="material-icons icon">
                  person
                </i>
                <span class="text">employe</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=adddepartment" class="nav-link px-2">
              <i class="material-icons icon">local_pizza</i>
                <span class="text">departement</span></a
              >
            </li>
            <li class="nav-item">
              <a href="?page=responsable" class="nav-link px-2">
                <i class="material-icons icon">
                person_add
                </i>
                <span class="text">responsable</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=alldepartement" class="nav-link px-2">
                <i class="material-icons icon">
                attachment 
                </i>
                <span class="text">alldepartement</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="#" class="nav-link px-2 sideMenuToggler">
                <i class="material-icons icon expandView ">
                  view_list
                </i>
                <span class="text">Resize</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="content">
        <main>
          <div class="container-fluid">
 <h4 class="mb-2">all demmandes</h4>
                  <form class="form-inline" method="POST" >
                        <div class="mb-2 mx-2">
                        <table class="table">
                           <thead class="text-light text-center">
                               <th colspan="3">Departement</th>
                           </thead>
                           <tbody>
                           <?php 
                           include_once("../config/connect.php");
                           $sql="SELECT DISTINCT departements.* FROM `employes`,`departements`,`responsables` WHERE  departements.id=responsables.id_departement AND responsables.id_employe=$id_employe";
                        $stmt = $conn->query($sql);
                        while($departement=$stmt->fetch(PDO::FETCH_OBJ)){
                            //print_r($departement);
                            echo '<tr>
                                    <td colspan="3" class="text-center"><input value="Departement <<'.$departement->nom.'>>" class="text-center" readonly>
                                            <table class="table">
                                                <thead class="text-light text-center">
                                                <tr>
                                                <th colspan="3">Demandes</th>
                                                </tr>
                                                <tr>
                                                <th>Status</th>
                                                <th>date traitement</th>
                                                <th>date validation</th>
                                                </tr>
                                                </thead>
                                                <tbody>';
                                            $demandes=departementDemande($departement->id,$conn);
                                            foreach($demandes as $demande){
                                                    echo 
                                                    '<tr>
                                                    <td ><input value="'.$demande["status"].'" class="text-center" readonly></td>
                                                    <td ><input value="'.$demande["date_traitement"].'" class="text-center" readonly></td>
                                                    <td ><input value="'.$demande["date_validation"].'" class="text-center" readonly></td>';
                                                }
                                                echo '</tbody>
                                                </table>
                                                </td>
                                            </tr>';
                               //  SELECT demandes.* FROM `demandes`,`operations`,`departements` WHERE demandes.id_operation=operations.id AND operations.id_departement= departements.id
                        }
                        ?>
                           </tbody>
                        </table>
                 </form>
                 </div>
                 </main>
                 </div>
                 <?php
include_once("includesadmin/footer.php");?>
</body>