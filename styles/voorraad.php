<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Voorraad - Voedselbank Maaskantje</title>
  <link rel="icon" type="image/x-icon" href="./styles/images/logo.png">
  <link rel="stylesheet" href="voorraad.css">
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

    <main class="voorraad-content">
      <div class="voorraad-header">
        <h1 class="voorraad-title">Voorraad</h1>
      </div>

      <section class="producten-lijst">
        <div class="producten-top">
          <h2>Producten</h2>
          <div class="producten-acties">
            <input class="producten-zoek" type="text" placeholder="Zoek product...">
            <a href="../product-bewerken.php" class="btn-product-toevoegen">+ Product toevoegen</a>
          </div>
        </div>

        <article class="product-item">
          <div class="product-info">
            <span class="product-name">Appels</span>
            <span class="product-meta">EAN: 123456789 — Fruit</span>
          </div>
          <div class="product-right">
            <span class="product-amount">120 stuks</span>
            <button class="product-edit">Bewerk</button>
          </div>
        </article>

        <article class="product-item">
          <div class="product-info">
            <span class="product-name">Brood</span>
            <span class="product-meta">EAN: 987654321 — Bakkerij</span>
          </div>
          <div class="product-right">
            <span class="product-amount">45 stuks</span>
            <button class="product-edit">Bewerk</button>
          </div>
        </article>

        <article class="product-item">
          <div class="product-info">
            <span class="product-name">Melk</span>
            <span class="product-meta">EAN: 456789123 — Zuivel</span>
          </div>
          <div class="product-right">
            <span class="product-amount">80 liter</span>
            <button class="product-edit">Bewerk</button>
          </div>
        </article>
      </section>
    </main>
  </section>
</body>
</html>
