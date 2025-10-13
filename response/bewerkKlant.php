<?php
include '../connection/connection.php';
session_start();
$pdo = dbConnect();

if (isset($_GET['id'])) {
    $idklant = (int)$_GET['id']; 

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['naam'])) {
        $nieuweNaam = $_POST['naam'];

        $updateStmt = $pdo->prepare('UPDATE klant SET naam = :naam WHERE idklant = :id');
        $updateStmt->execute(['naam' => $nieuweNaam, 'id' => $idklant]);
    }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['adres'])) {
        $nieuweAdres = $_POST['adres'];

        $updateStmt = $pdo->prepare('UPDATE klant SET adres = :adres WHERE idklant = :id');
        $updateStmt->execute(['ean' => $nieuweAdres, 'id' => $idklant]);
    }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['postcode'])) {
        $nieuwePostcode = $_POST['postcode'];

        $updateStmt = $pdo->prepare('UPDATE klant SET postcode = :postcode WHERE idklant = :id');
        $updateStmt->execute(['postcode' => $nieuwePostcode, 'id' => $idklant]);
    }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['telefoonnummer'])) {
        $nieuweTel = $_POST['telefoonnummer'];

        $updateStmt = $pdo->prepare('UPDATE klant SET telefoonnummer = :telefoonnummer WHERE idklant = :id');
        $updateStmt->execute(['telefoonnummer' => $nieuweTel, 'id' => $idklant]);
    }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
        $nieuweEmail = $_POST['email'];

        $updateStmt = $pdo->prepare('UPDATE klant SET email = :email WHERE idklant = :id');
        $updateStmt->execute(['email' => $nieuweEmail, 'id' => $idklant]);
    }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['volwassene'])) {
        $nieuweV = $_POST['volwassene'];

        $updateStmt = $pdo->prepare('UPDATE klant SET volwassene = :volwassene WHERE idklant = :id');
        $updateStmt->execute(['volwassene' => $nieuweV, 'id' => $idklant]);
    }
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['kind'])) {
        $nieuweK = $_POST['kind'];

        $updateStmt = $pdo->prepare('UPDATE klant SET kind = :kind WHERE idklant = :id');
        $updateStmt->execute(['kind' => $nieuweK, 'id' => $idklant]);
    }
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['baby'])) {
        $nieuweB = $_POST['baby'];

        $updateStmt = $pdo->prepare('UPDATE klant SET baby = :baby WHERE idklant = :id');
        $updateStmt->execute(['baby' => $nieuweB, 'id' => $idklant]);
    }
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['uitzondering'])) {
        $nieuweU = $_POST['uitzondering'];

        $updateStmt = $pdo->prepare('UPDATE klant SET uitzondering = :uitzondering WHERE idklant = :id');
        $updateStmt->execute(['uitzondering' => $nieuweU, 'id' => $idklant]);
    }

    header("Location: ../views/succes.php");
    
    $stmt = $pdo->prepare('SELECT * FROM klant WHERE idklant = :id');
    $stmt->execute(['id' => $idklant]);
    $klant = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$klant) {
        echo "Klant niet gevonden.";
        exit;
    }
} else {
    echo "Geen klant-ID opgegeven.";
    exit;
}

?>