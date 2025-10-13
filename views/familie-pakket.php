<?php
include '../response/toegang.php';
checkRol(['1'],['3']);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pakketten - Voedselbank Maaskantje</title>
  <link rel="icon" type="image/x-icon" href="../styles/images/logo.png">
  <link rel="stylesheet" href="../styles/familie-pakket.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bodyLayout">
  <section>
      <header>
        <div id="headerImg">
            <img src="../styles/images/logo.png">
        </div>

        <div id="nav">
        <?php
        $stmt = $pdo->query('SELECT idgebruiker FROM gebruiker');
        $gebruikers = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($gebruikers as $gebruiker)
        ?>
            <div class="navLink">
                <img src="../styles/images/icon-home.png">
                <a href="../index.php">Home</a>
            </div>
            <div class="navLink">
                <img src="../styles/images/icon-user.png">
                <a href="mijn-account.php?id=<?=$gebruiker['idgebruiker'] ?>">Mijn account</a>
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
            <form action="../response/loguit.php" method="POST">
                <button class="blauwBtn">Log uit</button>
            </form>
        </div>
      </header>

    <main class="content">

    <?php
    $idklant = (int)$_GET['idklant'];

    $stmt = $pdo->prepare('SELECT * FROM klant WHERE idklant = :idklant');
    $stmt->execute(['idklant' => $idklant]);
    $klant = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>

      <h1>Pakketten</h1>

      <div class="pakket-grid">
        <div class="card familie-info">
          <h2>Familie <?= htmlspecialchars($klant['naam']) ?></h2>
          <div class="card-body">
            <p><strong>Familie: </strong><?= htmlspecialchars($klant['naam']) ?></p>
            <p><strong>Allergieën: </strong><?= htmlspecialchars($klant['uitzondering']) ?></p>
          </div>
        </div>

        <div class="card familie-pakket">
        <h2>Pakket van <?= htmlspecialchars($klant['naam']) ?></h2>

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
          <div class="card-body">
            <p>
              <?= htmlspecialchars($pakketProduct['productnaam']) ?>
             - <?= htmlspecialchars($pakketProduct['in_pakket']) ?>
            </p>
          </div>
        <?php
        }
        ?>
        </div>

        <div class="card producten">
          <div class="card-header">
            <h2>Producten</h2>
          </div>
        <?php
        $stmt = $pdo->query('SELECT * FROM product');
        $producten = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($producten as $product){
        ?>

    <form action="../response/addProductInPakket.php" method="POST" class="">
      <input type="hidden" name="idklant" value="<?= htmlspecialchars($idklant) ?>">
      <input type="hidden" name="idpakket" value="<?= htmlspecialchars($idpakket) ?>">
      <input type="hidden" name="idproduct" value="<?= $product['idproduct'] ?>">
      <div class="item">
      <p><strong><?= htmlspecialchars($product['productnaam']) ?></strong></p>

                <div class="smallertext" id="eanCategorie">
                  <p>
                  <?= htmlspecialchars($product['ean']) ?> 
                  </p>
                  <p>
                  <?= htmlspecialchars($product['categorie']) ?>
                  </p>
                </div>

      <label for="aantal_<?= $product['idproduct'] ?>">Aantal:</label>
      <input type="number" id="aantal_<?= $product['idproduct'] ?>" name="aantal" value="1" min="1" style="width:60px;">

      <button type="submit">Toevoegen</button>
      </div>
    </form>

        <?php
        }
        ?>
        </div>
      </div>
    </main>
  </section>
</body>
</html>
