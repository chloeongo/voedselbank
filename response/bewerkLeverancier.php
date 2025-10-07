<?php
include '../connection/connection.php';
session_start();
$pdo = dbConnect();

if (isset($_GET['id'])) {
    $idleverancier = (int)$_GET['id']; 

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['bedrijfsnaam'])) {
        $nieuweNaam = $_POST['bedrijfsnaam'];

        $updateStmt = $pdo->prepare('UPDATE leverancier SET bedrijfsnaam = :bedrijfsnaam WHERE idleverancier = :id');
        $updateStmt->execute(['bedrijfsnaam' => $nieuweNaam, 'id' => $idleverancier]);
    }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['adres'])) {
        $nieuweAdres = $_POST['adres'];

        $updateStmt = $pdo->prepare('UPDATE leverancier SET adres = :adres WHERE idleverancier = :id');
        $updateStmt->execute(['adres' => $nieuweAdres, 'id' => $idleverancier]);
    }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contactPersoon'])) {
        $nieuweContact = $_POST['contactPersoon'];

        $updateStmt = $pdo->prepare('UPDATE leverancier SET contactPersoon = :contactPersoon WHERE idleverancier = :id');
        $updateStmt->execute(['contactPersoon' => $nieuweContact, 'id' => $idleverancier]);
    }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
        $nieuweEmail = $_POST['email'];

        $updateStmt = $pdo->prepare('UPDATE leverancier SET email = :email WHERE idleverancier = :id');
        $updateStmt->execute(['email' => $nieuweEmail, 'id' => $idleverancier]);
    }
    
    //haalt alle velden op
    $stmt = $pdo->prepare('SELECT * FROM leverancier WHERE idleverancier = :id');
    $stmt->execute(['id' => $idleverancier]);
    $leverancier = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$leverancier) {
        echo "Leverancier niet gevonden.";
        exit;
    }
} else {
    echo "Geen leverancier-ID opgegeven.";
    exit;
}

?>