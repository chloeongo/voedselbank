<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product toevoegen - Voedselbank Maaskantje</title>
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

    <main class="content">
      <div class="form-wrapper">
        <a href="leveranciers.php" class="btn-terug">Ga terug</a>

        <div class="form-container">
          <h2>Voeg een leverancier toe</h2>
          <form action="../response/addLeverancier.php" method="post">
            <label for="bedrijfsnaam">Bedrijfsnaam:</label>
            <input type="text" id="bedrijfsnaam" name="bedrijfsnaam" placeholder="Bedrijfsnaam" required>

            <label for="adres">Adres:</label>
            <input type="text" id="adres" name="adres" placeholder="Adres" required>

            <label for="contact persoon">Contact persoon:</label>
            <input type="text" id="contactPersoon" name="contactPersoon" placeholder="Contact Persoon" required>

            <label for="e-mail">E-Mail:</label>
            <input type="text" id="email" name="email" placeholder="E-Mail" required>

            <button type="submit" class="btn-submit">Voeg toe</button>
          </form>
        </div>
      </div>
    </main>
  </section>
</body>
</html>
