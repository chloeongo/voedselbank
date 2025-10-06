<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Leveranciers - Voedselbank Maaskantje</title>
  <link rel="icon" type="image/x-icon" href="./styles/images/logo.png">
  <link rel="stylesheet" href="./styles/leveranciers.css">
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
      <div class="top-bar">
        <a href="index.php" class="back-btn">Ga terug</a>
      </div>

      <h1>Leveranciers</h1>

      <div class="leveranciers-sectie">
        <div class="bedrijven-card">
          <div class="header">
            <h3>Bedrijven</h3>
            <input type="text" placeholder="Zoek leverancier...">
          </div>

          <div class="bedrijven-lijst">
            <div class="bedrijf-item">
              <span>&lt;Leverancier naam&gt;</span>
              <button class="btn-bewerk">Bewerk</button>
            </div>
            <div class="bedrijf-item">
              <span>&lt;Leverancier naam&gt;</span>
              <button class="btn-bewerk">Bewerk</button>
            </div>
            <div class="bedrijf-item">
              <span>&lt;Leverancier naam&gt;</span>
              <button class="btn-bewerk">Bewerk</button>
            </div>
            <div class="bedrijf-item">
              <span>&lt;Leverancier naam&gt;</span>
              <button class="btn-bewerk">Bewerk</button>
            </div>
            <div class="bedrijf-item">
              <span>&lt;Leverancier naam&gt;</span>
              <button class="btn-bewerk">Bewerk</button>
            </div>
          </div>
        </div>

        <div class="leveringen-card">
          <h3>Volgende leveringen</h3>
          <div class="levering-item">
            <span>&lt;Leverancier naam&gt;</span>
            <p>Leveringsdatum: 10/09/2025</p>
          </div>
          <div class="levering-item">
            <span>&lt;Leverancier naam&gt;</span>
            <p>Leveringsdatum: 10/09/2025</p>
          </div>
          <div class="levering-item">
            <span>&lt;Leverancier naam&gt;</span>
            <p>Leveringsdatum: 10/09/2025</p>
          </div>
        </div>
      </div>
      <div class="toevoegen-card">
        <a href="leverancier-toevoegen.php" class="add-btn">Voeg nieuwe leveranciers toe</a>
      </div>
    </main>
  </section>
</body>
</html>
