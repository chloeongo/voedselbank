<?php
include '../connection/connection.php';
session_start();
$pdo = dbConnect();

if (isset($_GET['id'])) {
    $idproduct = (int)$_GET['id']; 

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['productnaam'])) {
        $nieuweNaam = $_POST['productnaam'];

        $updateStmt = $pdo->prepare('UPDATE product SET productnaam = :productnaam WHERE idproduct = :id');
        $updateStmt->execute(['productnaam' => $nieuweNaam, 'id' => $idproduct]);
    }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ean'])) {
        $nieuweEan = $_POST['ean'];

        $updateStmt = $pdo->prepare('UPDATE product SET ean = :ean WHERE idproduct = :id');
        $updateStmt->execute(['ean' => $nieuweEan, 'id' => $idproduct]);
    }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['aantal'])) {
        $nieuweAantal = $_POST['aantal'];

        $updateStmt = $pdo->prepare('UPDATE product SET aantal = :aantal WHERE idproduct = :id');
        $updateStmt->execute(['aantal' => $nieuweAantal, 'id' => $idproduct]);
    }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['categorie'])) {
        $nieuweCategorie = $_POST['categorie'];

        $updateStmt = $pdo->prepare('UPDATE product SET categorie = :categorie WHERE idproduct = :id');
        $updateStmt->execute(['categorie' => $nieuweCategorie, 'id' => $idproduct]);
    }
    

    $stmt = $pdo->prepare('SELECT * FROM product WHERE idproduct = :id');
    $stmt->execute(['id' => $idproduct]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$product) {
        echo "Product niet gevonden.";
        exit;
    }
} else {
    echo "Geen product-ID opgegeven.";
    exit;
}

?>