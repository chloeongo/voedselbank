<?php
include '../connection/connection.php';
session_start();
$pdo = dbConnect();


if (isset($_GET['id'])) {
    $idgebruiker = (int)$_GET['id']; 

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['idrol'])) {
        $nieuweRol = $_POST['idrol'];

        $updateStmt = $pdo->prepare('UPDATE gebruiker SET rol = :idrol WHERE idgebruiker = :id');
        $updateStmt->execute(['idrol' => $nieuweRol, 'id' => $idgebruiker]);
    }

    $stmt = $pdo->prepare('SELECT gebruikersnaam, rol FROM gebruiker WHERE idgebruiker = :id');
    $stmt->execute(['id' => $idgebruiker]);
    $gebruiker = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$gebruiker) {
        echo "Gebruiker niet gevonden.";
        exit;
    }
} else {
    echo "Geen gebruiker-ID opgegeven.";
    exit;
}
?>

