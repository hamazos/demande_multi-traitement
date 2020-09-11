<?php

if (isset($_POST['cin']) && isset($_POST['cle'])) {
    try {
        include_once("connect.php");

        $id = $_POST['cle'];
        $cin = $_POST['cin'];
        $stmt = $conn->prepare("SELECT nom, date_demande, date_traitement, date_validation, status 
                                FROM operations INNER JOIN demandes 
                                ON operations.id = demandes.id_operation
                                WHERE demandes.id = '$id' AND id_citoyen = (SELECT id FROM citoyens WHERE cin='$cin')");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $demandes = $stmt->fetchAll();

        if (sizeof($demandes) > 0) {
            echo json_encode($demandes[0]);
        }

        else{
            echo '404';
        }

    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        // echo 'error';
    }
} else {
    echo '404';
}