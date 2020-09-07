<?php
include_once("../config/connect.php");

$id = $_GET['id'];
    
try{
    $sql = "DELETE FROM departements where id=?";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$id]);
    if($stmt){

        header('Location:index.php?page=alldepartement');
        

    }
}catch(PDOException $e){

    // echo 'error' .$e->getMessage();
    header('Location:index.php?page=alldepartement');

}