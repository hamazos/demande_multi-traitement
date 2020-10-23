<?php
    include_once('include/head.php');  
    include_once('../config.php');        
    $id_user=$_SESSION['id'];   
?> 
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><i class="fas fa-tachometer-alt"></i> Demandes</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"> Demandes</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive"style="margin-top: 20px;">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Demnadeur</th>
                                    <th>Titre</th>
                                    <th>Statut</th>
                                    <th>Date d'ouverture</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody> 
                            <?php
                                    $sql = "SELECT * FROM demande WHERE (verif_DAF=0 AND verif_RMG=1) OR (verif_RMG=2 AND verif_DAF=1) OR (verif_RMG=3 AND verif_DAF=2)";
                                    $query = $conn->query($sql);
                                    while($row = $query->fetch_assoc()){
                                        if($row['verif_RMG']==1){
                                            $statut='<button type="button" class="btn btn-primary disabled"><i class="fas fa-sync-alt fa-spin"></i> En cours</button>';
                                        }elseif($row['verif_DAF']==1){
                                            $statut='<button type="button" class="btn btn-success disabled"><i class="fas fa-check"></i>Accepter  </button>';
                                        }elseif($row['verif_DAF']==2){
                                            $statut='<button type="button" class="btn btn-danger disabled"><i class="fas fa-times"></i> Refuser</button>';
                                        }
                                        echo 
                                        "<tr>
                                            <td>".$row['id_demande']."</td>
                                            <td>".$row['demandeur']."</td>
                                            <td>".$row['titre']."</td>
                                            <td>$statut</td>
                                            <td>".$row['date_ouverture']."</td>
                                            <td>
                                                <a href='#edit_".$row['id_demande']."'class='btn btn-success btn-sm rounded-0' type='button' data-toggle='modal' data-placement='top' title='Edit'><i class='fa fa-edit fa-xs'></i></button></a>
                                            </td>
                                        </tr>";
                                        include('modal/edit_modal.php');
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
    include_once('include/footer.php');      
?> 