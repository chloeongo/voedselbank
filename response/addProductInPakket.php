<?php
include '../connection/connection.php';
$pdo = dbConnect();

$idklant = (int)$_POST['idklant'];

if (isset($_POST['idpakket'], $_POST['idproduct'], $_POST['aantal'])) {
    $idpakket = (int)$_POST['idpakket'];
    $idproduct = (int)$_POST['idproduct'];
    $aantal = (int)$_POST['aantal'];

    // haalt de huidige voorraad op
    $stmt = $pdo->prepare("SELECT aantal FROM product WHERE idproduct = :idproduct");
    $stmt->execute(['idproduct' => $idproduct]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$product) {
        die("Product niet gevonden.");
    }

    $voorraad = (int)$product['aantal'];

    // kijkt of er genoeg in de voorraad is
    if ($aantal > $voorraad) {
        // te weinig voorraad > foutmelding of redirect met melding
        echo "Er is niet genoeg voorraad om dit product toe te voegen";
        exit();
    }

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

    //trekt de producten in de pakket af van de product in de voorraad
    $updateVoorraad = $pdo->prepare("UPDATE product 
                                     SET aantal = GREATEST(aantal - :aantal, 0) 
                                     WHERE idproduct = :idproduct");
    $updateVoorraad->execute(['aantal' => $aantal, 'idproduct' => $idproduct]);

    header("Location: ../views/familie-pakket.php?idpakket=$idpakket&idklant=$idklant");    
    exit();
} else {
    echo "Ongeldige invoer.";
}
?>
