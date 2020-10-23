<?php
    include_once('include/head.php'); 
    include_once('../config.php');       
?> 
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><i class="fas fa-desktop"></i>Add User</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Add User</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body"> 
                    <div class="row">
                        <a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span><i class="fas fa-plus"></i> Ajouter User</a>
                        <a href="#" class="btn btn-success"style="position: absolute;right: 25px;"onclick="pop_up('Bureau/print_pdf.php');"><span class="glyphicon glyphicon-print"></span><i class="fas fa-file-pdf"></i> exporter PDF</a>
                    </div>
                    <div class="table-responsive"style="margin-top: 20px;">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Pseudo</th>
                                    <th>Password</th>
                                    <th>Privilege</th>
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody> 
                            <?php
                                    $sql = "SELECT * FROM users";
                                    $query = $conn->query($sql);
                                    while($row = $query->fetch_assoc()){
                                        if($row['type']==0){
                                            $type='Administrateur';
                                        }elseif($row['type']==1){
                                            $type='Demandeur';
                                        }elseif($row['type']==2){
                                            $type='Responsable informatique';
                                        }elseif($row['type']==3){
                                            $type='Responsable moyens généraux';
                                        }elseif($row['type']==4){
                                            $type='Directeur administratif et financier';
                                        }
                                        echo 
                                        "<tr>
                                            <td>".$row['id']."</td>
                                            <td>".$row['fname']."</td>
                                            <td>".$row['lname']."</td>
                                            <td>".$row['pseudo']."</td>
                                            <td>".$row['password']."</td>
                                            <td>$type</td>
                                            <td>
                                                <a href='#edit_".$row['id']."'class='btn btn-success btn-sm rounded-0' type='button' data-toggle='modal' data-placement='top' title='Edit'><i class='fa fa-edit fa-xs'></i></button></a>
                                                <a href='#delete_".$row['id']."'class='btn btn-danger btn-sm rounded-0' type='button' data-toggle='modal' data-placement='top' title='Delete'><i class='fa fa-trash fa-xs'></i></button></a>
                                            </td>
                                        </tr>";
                                        include('modal/edit_delete_user_modal.php');
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
    include('modal/add_user_modal.php');
    include_once('include/footer.php');      
?> 
