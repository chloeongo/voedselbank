<?php
include '../response/bewerkProduct.php';
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product bewerken - Voedselbank Maaskantje</title>
  <link rel="icon" type="image/x-icon" href="../styles/images/logo.png">
  <link rel="stylesheet" href="../styles/styles.css">
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
                <a href="mijn-account.php">Mijn account</a>
            </div>
            <div class="navLink">
                <img src="../styles/images/icon-leverancier.png">
                <a href="leveranciers.php">Leveranciers</a>
            </div>
            <div class="navLink active">
                <img src="../styles/images/icon-voorraad.png">
                <a href="voorraad.php">Voorraad</a>
            </div>
            <div class="navLink">
                <img src="../styles/images/icon-pakket.png">
                <a href="index.php">Pakketten</a>
            </div>
            <div class="navLink">
                <img src="../styles/images/icon-klant.png">
                <a href="klanten.php">Klanten</a>
            </div>
            <div class="navLink">
                <img src="../styles/images/icon-beheer.png">
                <a href="beheer.php">Beheren</a>
            </div>
            <div>
              <button class="blauwBtn">Log uit</button>
            </div>
        </div>
      </header>

    <main class="bewerken-content">
      <a href="voorraad.php" class="btn-terug">Ga terug</a>

      <div class="bewerken-card">
        <h2>Bewerk <?= htmlspecialchars($product['productnaam']) ?></h2>
        <div class="bewerken-details">
          <div class="infoLine" id="bewerkProduct">
            <div class="infoLinks">
              <p style="font-weight: 600;">Naam:</p>
            <form method="POST">
                <input id="bewerkInput" type="text" name="productnaam" value="<?= htmlspecialchars($product['productnaam']) ?>">                        </div>
              <div class="bewerkBtn">
                <button type="submit">Opslaan</button>
              </div>
            </form>
          </div>
          <div class="infoLine" id="bewerkProduct">
            <div class="infoLinks">
              <p style="font-weight: 600;">EAN:</p>
            <form method="POST">
                <input id="bewerkInput" type="text" name="ean" value="<?= htmlspecialchars($product['ean']) ?>">                        </div>
              <div class="bewerkBtn">
                <button type="submit">Opslaan</button>
              </div>
            </form>
          </div>
          <div class="infoLine" id="bewerkProduct">
            <div class="infoLinks">
              <p style="font-weight: 600;">Aantal:</p>
            <form method="POST">
                <input id="bewerkInput" type="text" name="aantal" value="<?= htmlspecialchars($product['aantal']) ?>">                        </div>
              <div class="bewerkBtn">
                <button type="submit">Opslaan</button>
              </div>
            </form>
          </div>
          <div class="infoLine" id="bewerkProduct">
            <div class="infoLinks">
              <p style="font-weight: 600;">Categorie:</p>
            <form method="POST">
                <input id="bewerkInput" type="text" name="categorie" value="<?= htmlspecialchars($product['categorie']) ?>">                        </div>
              <div class="bewerkBtn">
                <button type="submit">Opslaan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
  </section>
</body>
</html>
