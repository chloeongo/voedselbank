<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product bewerken - Voedselbank Maaskantje</title>
  <link rel="icon" type="image/x-icon" href="./styles/images/logo.png">
  <link rel="stylesheet" href="./styles/product-bewerken.css">
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
          <div class="navLink">
              <img src="./styles/images/icon-leverancier.png" alt="">
              <a href="index.php">Leveranciers</a>
          </div>
          <div class="navLink active">
              <img src="./styles/images/icon-voorraad.png" alt="">
              <a href="voorraad.php">Voorraad</a>
          </div>
      </div>
    </header>

    <main class="bewerken-content">
      <a href="voorraad.php" class="btn-terug">Ga terug</a>

      <div class="bewerken-card">
        <h2>Bewerk &lt;Productnaam&gt;</h2>
        <div class="bewerken-details">
          <div class="bewerken-row">
            <span class="label">Product:</span>
            <span class="value">&lt;Productnaam&gt;</span>
            <button class="bewerk-btn">Bewerk</button>
          </div>
          <div class="bewerken-row">
            <span class="label">EAN:</span>
            <span class="value">&lt;123456789123&gt;</span>
            <button class="bewerk-btn">Bewerk</button>
          </div>
          <div class="bewerken-row">
            <span class="label">Aantal:</span>
            <span class="value">&lt;12&gt;</span>
            <button class="bewerk-btn">Bewerk</button>
          </div>
          <div class="bewerken-row">
            <span class="label">Categorie:</span>
            <span class="value">&lt;Categorie&gt;</span>
            <button class="bewerk-btn">Bewerk</button>
          </div>
        </div>
      </div>
    </main>
  </section>
</body>
</html>
