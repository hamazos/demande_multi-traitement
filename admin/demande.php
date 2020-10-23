<?php
    include_once('include/head.php');      
?> 
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><i class="fas fa-desktop"></i>Demande</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Demande</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body"> 
                    <div class="row">
                        <a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span><i class="fas fa-plus"></i> Ajouter Pc Bureau</a>
                        <a href="#" class="btn btn-success"style="position: absolute;right: 25px;"onclick="pop_up('Bureau/print_pdf.php');"><span class="glyphicon glyphicon-print"></span><i class="fas fa-file-pdf"></i> exporter PDF</a>
                    </div>
                    <div class="table-responsive"style="margin-top: 20px;">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>S/N</th>
                                    <th>N°Inv</th>
                                    <th>Designation</th>
                                    <th>Marque</th>
                                    <th>Modele</th>
                                    <th>CPU</th>
                                    <th>Etat</th>
                                    <th>Affectation</th>
                                    <th>Systeme</th>
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody> 
                                
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
