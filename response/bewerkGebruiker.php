<?php
include '../connection/connection.php';
session_start();
$pdo = dbConnect();


if (isset($_GET['id'])) {
    $idgebruiker = (int)$_GET['id']; 

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['rol'])) {
        $nieuweRol = $_POST['rol'];

        $updateStmt = $pdo->prepare('UPDATE gebruiker SET rol = :rol WHERE idgebruiker = :id');
        $updateStmt->execute(['rol' => $nieuweRol, 'id' => $idgebruiker]);
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

