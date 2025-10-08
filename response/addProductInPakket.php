<?php
include '../connection/connection.php';
$pdo = dbConnect();

if (isset($_POST['idpakket'], $_POST['idproduct'], $_POST['aantal'])) {
    $idpakket = (int)$_POST['idpakket'];
    $idproduct = (int)$_POST['idproduct'];
    $aantal = (int)$_POST['aantal'];
    // kijkt of het product al in het pakket zit
    $check = $pdo->prepare("SELECT aantal FROM pakket_has_product WHERE idpakket = :idpakket AND idproduct = :idproduct");
    $check->execute(['idpakket' => $idpakket, 'idproduct' => $idproduct]);
    $existing = $check->fetch(PDO::FETCH_ASSOC);

    if ($existing) {
        // Update bestaand aantal
        $nieuwAantal = $existing['aantal'] + $aantal;
        $update = $pdo->prepare("UPDATE pakket_has_product SET aantal = :aantal WHERE idpakket = :idpakket AND idproduct = :idproduct");
        $update->execute(['aantal' => $nieuwAantal, 'idpakket' => $idpakket, 'idproduct' => $idproduct]);
    } else {
        // Voeg nieuw product toe
        $insert = $pdo->prepare("INSERT INTO pakket_has_product (idpakket, idproduct, aantal) VALUES (:idpakket, :idproduct, :aantal)");
        $insert->execute(['idpakket' => $idpakket, 'idproduct' => $idproduct, 'aantal' => $aantal]);
    }

    header("Location: ../views/familie-pakket.php?id=$idpakket");
    exit();
} else {
    echo "Ongeldige invoer.";
}
?>
