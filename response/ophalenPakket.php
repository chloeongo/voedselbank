<?php
include '../connection/connection.php';
session_start();
$pdo = dbConnect();

if (isset($_GET['idpakket'])) {
    $idpakket = (int)$_GET['idpakket'];
    $uitgifteDatum = date("Y/m/d");

    var_dump($uitgifteDatum);

    $updatestmt = $pdo->prepare("UPDATE pakket SET uitgifte = :uitgifte WHERE idpakket = :idpakket");
    $updatestmt->execute([
        'uitgifte' => $uitgifteDatum,
        'idpakket' => $idpakket
    ]);


    header("Location: ../views/succes.php");
    exit();
} else {
    echo "Geen pakket-ID opgegeven.";
}
?>