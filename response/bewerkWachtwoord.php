<?php
include '../connection/connection.php';
session_start();
$pdo = dbConnect();


if (isset($_GET['id'])) {
    $idgebruiker = (int)$_GET['id']; 

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['wachtwoord'])) {
        $nieuweWW = $_POST['wachtwoord'];

        $updateStmt = $pdo->prepare('UPDATE gebruiker SET wachtwoord = :wachtwoord WHERE idgebruiker = :id');

        // hash het wachtwoord
        $hashedWW = password_hash($nieuweWW, PASSWORD_DEFAULT);
        $updateStmt->execute(['wachtwoord' => $hashedWW, 'id' => $idgebruiker]);

            header("Location: ../views/succes.php");

    }

    $stmt = $pdo->prepare('SELECT * FROM gebruiker WHERE idgebruiker = :id');
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

