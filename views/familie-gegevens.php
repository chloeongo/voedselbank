<?php
include '../response/bewerkKlant.php';
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Familie gegevens - Voedselbank Maaskantje</title>
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
            <div class="navLink">
                <img src="../styles/images/icon-voorraad.png">
                <a href="voorraad.php">Voorraad</a>
            </div>
            <div class="navLink">
                <img src="../styles/images/icon-pakket.png">
                <a href="index.php">Pakketten</a>
            </div>
            <div class="navLink active">
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

    <main>
      <h1>Klanten</h1>

      <div class="familie-box">
        <h2>Bewerk <?= htmlspecialchars($klant['naam']) ?></h2>
        <div class="bewerken-details">
          <div class="infoLine" id="bewerkProduct">
            <div class="infoLinks">
              <p style="font-weight: 600;">Familie naam:</p>
            <form method="POST">
                <input id="bewerkInput" type="text" name="naam" value=" <?= htmlspecialchars($klant['naam']) ?>">                        
              </div>
              <div class="bewerkBtn">
                <button type="submit">Opslaan</button>
              </div>
            </form>
          </div>
          <div class="infoLine" id="bewerkProduct">
            <div class="infoLinks">
              <p style="font-weight: 600;">Adres:</p>
            <form method="POST">
                <input id="bewerkInput" type="text" name="adres" value="<?= htmlspecialchars($klant['adres']) ?>">                        </div>
              <div class="bewerkBtn">
                <button type="submit">Opslaan</button>
              </div>
            </form>
          </div>
          <div class="infoLine" id="bewerkProduct">
            <div class="infoLinks">
              <p style="font-weight: 600;">Postcode:</p>
            <form method="POST">
                <input id="bewerkInput" type="text" name="postcode" value="<?= htmlspecialchars($klant['postcode']) ?>">                        </div>
              <div class="bewerkBtn">
                <button type="submit">Opslaan</button>
              </div>
            </form>
          </div>
          <div class="infoLine" id="bewerkProduct">
            <div class="infoLinks">
              <p style="font-weight: 600;">Telefoonnummer:</p>
            <form method="POST">
                <input id="bewerkInput" type="text" name="telefoonnummer" value="<?= htmlspecialchars($klant['telefoonnummer']) ?>">                        </div>
              <div class="bewerkBtn">
                <button type="submit">Opslaan</button>
              </div>
            </form>
          </div>
          <div class="infoLine" id="bewerkProduct">
            <div class="infoLinks">
              <p style="font-weight: 600;">E-mail:</p>
            <form method="POST">
                <input id="bewerkInput" type="text" name="email" value="<?= htmlspecialchars($klant['email']) ?>">                        </div>
              <div class="bewerkBtn">
                <button type="submit">Opslaan</button>
              </div>
            </form>
          </div>
          <div class="infoLine" id="bewerkProduct">
            <div class="infoLinks">
              <p style="font-weight: 600;">Volwassene:</p>
            <form method="POST">
                <input id="bewerkInput" type="text" name="volwassene" value="<?= htmlspecialchars($klant['volwassene']) ?>">                        </div>
              <div class="bewerkBtn">
                <button type="submit">Opslaan</button>
              </div>
            </form>
          </div>
          <div class="infoLine" id="bewerkProduct">
            <div class="infoLinks">
              <p style="font-weight: 600;">Kinderen:</p>
            <form method="POST">
                <input id="bewerkInput" type="text" name="kind" value="<?= htmlspecialchars($klant['kind']) ?>">                        </div>
              <div class="bewerkBtn">
                <button type="submit">Opslaan</button>
              </div>
            </form>
          </div>
          <div class="infoLine" id="bewerkProduct">
            <div class="infoLinks">
              <p style="font-weight: 600;">Babys's:</p>
            <form method="POST">
                <input id="bewerkInput" type="text" name="baby" value="<?= htmlspecialchars($klant['baby']) ?>">                        </div>
              <div class="bewerkBtn">
                <button type="submit">Opslaan</button>
              </div>
            </form>
          </div>
          <div class="infoLine" id="bewerkProduct">
            <div class="infoLinks">
              <p style="font-weight: 600;">Uitzonderingen:</p>
            <form method="POST">
                <input id="bewerkInput" type="text" name="uitzondering" value="<?= htmlspecialchars($klant['uitzondering']) ?>">                        </div>
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
