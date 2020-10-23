<?php
    include_once('include/head.php');
    include_once('../config.php');
    $id_user=$_SESSION['id'];
?> 
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><i class="fas fa-tachometer-alt"></i>Mes Demandes</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Mes Demandes</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body"> 
                    <div class="row">
                        <a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span><i class="fas fa-plus"></i> Ajouter Demande </a>
                    </div>
                    <div class="table-responsive"style="margin-top: 20px;">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Titre</th>
                                    <th>Statut</th>
                                    <th>Demnadeur</th>
                                    <th>Date d'ouverture</th>
                                    <th>Date de Retour</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <?php
                                    $sql = "SELECT * FROM demande WHERE id_user=$id_user";
                                    $query = $conn->query($sql);
                                    while($row = $query->fetch_assoc()){
                                        if($row['statut']==0){
                                            $statut='<button type="button" class="btn btn-primary disabled"><i class="fas fa-sync-alt fa-spin"></i> En cours</button>';
                                        }elseif($row['statut']==1){
                                            $statut='<button type="button" class="btn btn-success disabled"><i class="fas fa-check"></i> Accepter</button>';
                                        }elseif($row['statut']==2){
                                            $statut='<button type="button" class="btn btn-danger disabled"><i class="fas fa-times"></i> Refuser</button>';
                                        }
                                        echo 
                                        "<tr>
                                            <td>".$row['id_demande']."</td>
                                            <td>".$row['titre']."</td>
                                            <td>$statut</td>
                                            <td>".$row['demandeur']."</td>
                                            <td>".$row['date_ouverture']."</td>
                                            <td>".$row['date_retoure']."</td>
                                        </tr>";
                                    }
                                ?> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
    include('modal/add_demande_modal.php');
    include_once('include/footer.php');      
?> 