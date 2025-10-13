<?php
include '../response/toegang.php';
checkRol(['1'],['3']);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pakket gegevens - Voedselbank Maaskantje</title>
  <link rel="icon" type="image/x-icon" href="../styles/images/logo.png">
  <link rel="stylesheet" href="../styles/pakket-gegevens.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bodyLayout">
  <section>
      <header>
        <div id="headerImg">
            <img src="../styles/images/logo.png">
        </div>

        <div id="nav">
            <div class="navLink">
                <img src="../styles/images/icon-home.png">
                <a href="../index.php">Home</a>
            </div>
            <div class="navLink">
                <img src="../styles/images/icon-user.png">
                <a href="mijn-account.php?id=<?=$_SESSION['idgebruiker'] ?>">Mijn account</a>
            </div>
<?php if (toonElement(['1'],['2'])): ?>
            <div class="navLink">
                <img src="../styles/images/icon-leverancier.png">
                <a href="leveranciers.php">Leveranciers</a>
            </div>
<?php endif; ?>
<?php if (toonElement(['1'],['2'])): ?>
            <div class="navLink">
                <img src="../styles/images/icon-voorraad.png">
                <a href="voorraad.php">Voorraad</a>
            </div>
<?php endif; ?>
<?php if (toonElement(['1'],['3'])): ?>
            <div class="navLink active">
                <img src="../styles/images/icon-pakket.png">
                <a href="pakketten.php">Pakketten</a>
            </div>
<?php endif; ?>
<?php if (toonElement(['1'])): ?>
            <div class="navLink">
                <img src="../styles/images/icon-klant.png">
                <a href="klanten.php">Klanten</a>
            </div>
<?php endif; ?>
<?php if (toonElement(['1'])): ?>
            <div class="navLink">
                <img src="../styles/images/icon-beheer.png">
                <a href="beheer.php">Beheren</a>
            </div>
<?php endif; ?>
            <form method="POST" action="../response/loguit.php">
              <button type="submit" name="logout" class="blauwBtn">Log uit</button>
            </form>
        </div>
      </header>

    <main class="mainContent">
      <div class="card">

        <?php

        $idklant = $_GET['idklant'];      

        $stmt = $pdo->prepare('SELECT naam FROM klant WHERE idklant = :idklant');
        $stmt->execute(['idklant' => $idklant]);
        $klant = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>

        <h2>Pakket van <?= htmlspecialchars($klant['naam']) ?></h2>
        <div class="pakketGegevens">

        <?php
        $idpakket = $_GET['idpakket'];

        $stmt = $pdo->prepare('
        SELECT 
            product.productnaam,
            product.aantal AS voorraad,
            pakket_has_product.aantal AS in_pakket
        FROM 
            pakket_has_product
        INNER JOIN 
            product
        ON 
            pakket_has_product.idproduct = product.idproduct
        WHERE 
            pakket_has_product.idpakket = :idpakket
        ');
        $stmt->execute(['idpakket' => $idpakket]);
        $pakketProducten = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($pakketProducten as $pakketProduct){
        ?>

        <div class="pakket-info">
          <p>
            <?= htmlspecialchars($pakketProduct['productnaam']) ?>
          <span>
            <?= htmlspecialchars($pakketProduct['in_pakket']) ?>
          </span>
          </p>
        </div>
        <?php
        } 
        $stmt = $pdo->query('SELECT idpakket FROM pakket_has_product');
        $pakketProducten = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($pakketProducten as $pakketProduct)
        ?>
        <a href="../response/ophalenPakket.php?idpakket=<?=$pakketProduct['idpakket'] ?>">
          <button class="blauwBtn">Pakket opgehaald</button>
        </a>
        </div>
      </div>
    </main>
    
  </section>
</body>
</html>
