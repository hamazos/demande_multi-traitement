<?php

// 
if (isset($_POST['function'])) {

    if ($_POST['function'] == "VerifierCitoyen" && isset($_POST['cin'])) {
        VerifierCitoyen($_POST['cin']);
    } 
    
    
    else if ($_POST['function'] == "GetOperations") {
        GetOperations();
    } 
    
    
    else if ($_POST['function'] == "EnvoyerDemande") {

        if (isset($_POST['cin']) && isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['tel1']) && isset($_POST['tel2']) && isset($_POST['mail']) && isset($_POST['operation'])) {

            $cin = htmlspecialchars($_POST['cin']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $nom = htmlspecialchars($_POST['nom']);
            $tel1 = htmlspecialchars($_POST['tel1']);
            $tel2 = htmlspecialchars($_POST['tel2']);
            $mail = htmlspecialchars($_POST['mail']);
            $operation = htmlspecialchars($_POST['operation']);

            if (isset($_POST['req']) && $_POST['req'] == "insert") {
                InsertDemande($cin, $prenom, $nom, $tel1, $tel2, $mail, $operation);
            } else if (isset($_POST['req']) && $_POST['req'] == "update") {
                UpdateDemande($cin, $prenom, $nom, $tel1, $tel2, $mail, $operation);
            }
        }
    }
}


// Declaration des fonctions

function VerifierCitoyen($cin)
{
    try {
        include_once("connect.php");

        $stmt = $conn->prepare("SELECT * FROM citoyens WHERE cin = '$cin'");
        $stmt->execute();


        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $citoyens = $stmt->fetchAll();

        if (sizeof($citoyens) > 0) {

            echo json_encode($citoyens[0]);

        } else {

            echo "404";

        }

    } catch (PDOException $e) {
        echo "error";
    }
    $conn = null;
}


function GetOperations()
{

    try {
        include_once("connect.php");

        $stmt = $conn->prepare("SELECT `departements`.`nom` AS 'depNom', `operations`.`nom` AS 'opNom', `operations`.`requis` AS 'requis' FROM `departements` INNER JOIN `operations` ON `departements`.`id` = `operations`.`id_departement`");
        $stmt->execute();


        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetchAll();

        if (sizeof($row) > 0) {
            foreach ($row as $col) {

                if (!isset($arr[$col['depNom']])) {
                    $arr[$col['depNom']] = array(array("opNom" => $col['opNom'], "requis" => $col['requis']));
                } else {
                    array_push($arr[$col['depNom']], array("opNom" => $col['opNom'], "requis" => $col['requis']));
                }
            }

            echo json_encode($arr);
        } else {
            echo "404";
        }
    } catch (PDOException $e) {
        echo "error";
    }
    $conn = null;

}




function InsertDemande($cin, $prenom, $nom, $tel1, $tel2, $mail, $operation)
{
    try {

        include_once("connect.php");

        // Insertion citoyen

        $sql = "INSERT INTO citoyens (`cin`, `prenom`, `nom`, `tel1`, `tel2`, `mail`)
        VALUES ('$cin', '$prenom', '$nom', '$tel1', '$tel2', '$mail')";

        $conn->exec($sql);

        // Insertion de l'operation pour le citoyen
        $id_citoyen = $conn->lastInsertId();

        $stmt = $conn->prepare("SELECT id FROM `operations` WHERE nom = '$operation'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetchAll();

        if (sizeof($row) > 0) {
            $id_operation = $row[0]['id'];
        }

        $date_demande = date("Y-m-d");
        $sql = "INSERT INTO demandes (`status`, `date_demande`, `date_traitement`, `date_validation`, `id_citoyen`, `id_operation`)
        VALUES ('X', '$date_demande', 'لم تتم بعد', 'لم تتم بعد', '$id_citoyen', '$id_operation')"; // X = envoyer, O = en cours de traitement, V = Valider

        $conn->exec($sql);

        echo $conn->lastInsertId();

    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        // echo 'error';
    }

    $conn = null;
}


function UpdateDemande($cin, $prenom, $nom, $tel1, $tel2, $mail, $operation)
{
    try {

        include_once("connect.php");

        $sql = "UPDATE citoyens SET prenom='$prenom', nom='$nom', tel1='$tel1', tel2='$tel2', mail='$mail' WHERE cin='$cin'";

		$conn->exec($sql);
        
        // Update de l'operation pour le citoyen
        $stmt = $conn->prepare("SELECT id FROM `operations` WHERE nom = '$operation'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetchAll();

        if (sizeof($row) > 0) {
            $id_operation = $row[0]['id'];
        }

        $date_demande = date("Y-m-d");
        $sql = "INSERT INTO demandes (`status`, `date_demande`, `date_traitement`, `date_validation`, `id_citoyen`, `id_operation`)
        VALUES ('X', '$date_demande', 'لم تتم بعد', 'لم تتم بعد', (SELECT id FROM citoyens WHERE cin='$cin' LIMIT 1), $id_operation)"; // X = envoyer, O = en cours de traitement, V = Valider

        $conn->exec($sql);
      
        echo $conn->lastInsertId();

    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        // echo 'error';
    }

    $conn = null;
}


// if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     $error['$email'] = "Email adress is not valid";
// }