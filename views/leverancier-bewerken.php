<?php
include '../response/bewerkLeverancier.php';
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Leveranciers aanpassen - Voedselbank Maaskantje</title>
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
                <a href="index.php">Mijn account</a>
            </div>
            <div class="navLink active">
                <img src="../styles/images/icon-leverancier.png">
                <a href="leveranciers.php">Leveranciers</a>
            </div>
            <div class="navLink">
                <img src="../styles/images/icon-voorraad.png">
                <a href="voorraad.php">Voorraad</a>
            </div>
            <div class="navLink">
                <img src="../styles/images/icon-pakket.png">
                <a href="index.php">Pakketten</a>
            </div>
            <div class="navLink">
                <img src="../styles/images/icon-klant.png">
                <a href="index.php">Klanten</a>
            </div>
            <div class="navLink">
                <img src="../styles/images/icon-beheer.png">
                <a href="beheer.php">Beheren</a>
            </div>
        </div>
      </header>

    <main class="content">
      <div class="center-container">
        <a href="leveranciers.php" class="btn-terug">Ga terug</a>

        <div class="bewerken-box">
          <h1>Bewerk <?= htmlspecialchars($leverancier['bedrijfsnaam']) ?></h1>

          <div class="bewerken-card">
        <div class="bewerken-details">
          <div class="infoLine" id="bewerkProduct">
            <div class="infoLinks">
              <p style="font-weight: 600;">Bedrijfsnaam:</p>
            <form method="POST">
                <input id="bewerkInput" type="text" name="bedrijfsnaam" value="<?= htmlspecialchars($leverancier['bedrijfsnaam']) ?>">                        </div>
              <div class="bewerkBtn">
                <button type="submit">Opslaan</button>
              </div>
            </form>
          </div>
          <div class="infoLine" id="bewerkProduct">
            <div class="infoLinks">
              <p style="font-weight: 600;">Adres:</p>
            <form method="POST">
                <input id="bewerkInput" type="text" name="adres" value="<?= htmlspecialchars($leverancier['adres']) ?>">                        </div>
              <div class="bewerkBtn">
                <button type="submit">Opslaan</button>
              </div>
            </form>
          </div>
          <div class="infoLine" id="bewerkProduct">
            <div class="infoLinks">
              <p style="font-weight: 600;">Contact persoon:</p>
            <form method="POST">
                <input id="bewerkInput" type="text" name="contactPersoon" value="<?= htmlspecialchars($leverancier['contactPersoon']) ?>">                        </div>
              <div class="bewerkBtn">
                <button type="submit">Opslaan</button>
              </div>
            </form>
          </div>
          <div class="infoLine" id="bewerkProduct">
            <div class="infoLinks">
              <p style="font-weight: 600;">E-mail:</p>
            <form method="POST">
                <input id="bewerkInput" type="text" name="email" value="<?= htmlspecialchars($leverancier['email']) ?>">                        
              </div>
              <div class="bewerkBtn">
                <button type="submit">Opslaan</button>
              </div>
            </form>
          </div>
        </div>
          </div>
        </div>
      </div>
    </main>
  </section>
</body>
</html>
