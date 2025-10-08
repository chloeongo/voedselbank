<?php
include '../connection/connection.php';
$pdo = dbConnect();

if (isset($_GET['id'])) {
    $idklant = (int)$_GET['id'];

    $stmt = $pdo->prepare("INSERT INTO pakket (idklant) VALUES (:id)");
    $stmt->execute(['id' => $idklant]);

    $idpakket = $pdo->lastInsertId();

    header("Location: ../views/familie-pakket.php?id=$idpakket");
    exit();
} else {
    echo "Geen klant-ID opgegeven.";
}
?>