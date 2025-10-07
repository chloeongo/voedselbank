<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Leveranciers aanpassen - Voedselbank Maaskantje</title>
  <link rel="icon" type="image/x-icon" href="./styles/images/logo.png">
  <link rel="stylesheet" href="./styles/leverancier-bewerken.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bodyLayout">
  <section>
    <header>
      <div id="headerImg">
        <img src="./styles/images/logo.png" alt="logo">
      </div>

      <div id="nav">
        <div class="navLink">
          <img src="./styles/images/icon-home.png" alt="">
          <a href="index.php">Home</a>
        </div>
        <div class="navLink">
          <img src="./styles/images/icon-user.png" alt="">
          <a href="index.php">Mijn account</a>
        </div>
        <div class="navLink active">
          <img src="./styles/images/icon-leverancier.png" alt="">
          <a href="leveranciers.php">Leveranciers</a>
        </div>
        <div class="navLink">
          <img src="./styles/images/icon-voorraad.png" alt="">
          <a href="voorraad.php">Voorraad</a>
        </div>
      </div>
    </header>

    <main class="content">
      <div class="center-container">
        <a href="leveranciers.php" class="back-btn">Ga terug</a>

        <div class="bewerken-box">
          <h1>Bewerk &lt;Bedrijfsnaam&gt;</h1>

          <div class="bewerken-card">
            <div class="bewerken-item">
              <span><strong>Bedrijf:</strong> &lt;Bedrijfsnaam&gt;</span>
              <button class="btn-bewerk">Bewerk</button>
            </div>
            <div class="bewerken-item">
              <span><strong>Adres:</strong> &lt;Adresweg | 1234AB, Almere&gt;</span>
              <button class="btn-bewerk">Bewerk</button>
            </div>
            <div class="bewerken-item">
              <span><strong>Contactpersoon:</strong> &lt;Naam&gt;</span>
              <button class="btn-bewerk">Bewerk</button>
            </div>
            <div class="bewerken-item">
              <span><strong>E-mail:</strong> &lt;E-mail&gt;</span>
              <button class="btn-bewerk">Bewerk</button>
            </div>
          </div>
        </div>
      </div>
    </main>
  </section>
</body>
</html>
