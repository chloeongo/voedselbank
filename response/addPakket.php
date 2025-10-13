<?php
include '../connection/connection.php';
$pdo = dbConnect();

if (isset($_POST['id'])) {
    $idklant = (int)$_POST['id'];

    $stmt = $pdo->prepare("INSERT INTO pakket (idklant) VALUES (:id)");
    $stmt->execute(['id' => $idklant]);

    $idpakket = $pdo->lastInsertId();

    header("Location: ../views/familie-pakket.php?idpakket=$idpakket&idklant=$idklant");
    exit();
} else {
    echo "Geen klant-ID opgegeven.";
}
?>