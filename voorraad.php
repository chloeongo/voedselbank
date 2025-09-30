<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Voorraad - Voedselbank Maaskantje</title>
  <link rel="icon" type="image/x-icon" href="./styles/images/logo.png">
  <link rel="stylesheet" href="./styles/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bodyLayout">
  <section>
    <!-- HEADER (jouw bestaande header) -->
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

    <!-- INHOUD VAN VOORRAAD -->
    <main class="voorraad-content">
      <!-- Titel -->
      <div class="voorraad-header">
        <h1 class="voorraad-title">Voorraad</h1>
      </div>

      <!-- Grid: links productenlijst, rechts nieuw product -->
      <div class="voorraad-grid">

        <!-- Productenlijst -->
        <section class="producten-lijst">
          <div class="producten-top">
            <h2>Producten</h2>
            <input class="producten-zoek" type="text" placeholder="Zoek product...">
          </div>

          <!-- EXAMPLE: Vervang onderstaande static items door je PHP-loop die uit DB leest -->
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

          <!-- einde voorbeeld items -->
        </section>

        <!-- Rechtse kolom: nieuw product -->
        <aside class="nieuw-product">
          <h2>Nieuw product toevoegen</h2>
          <form action="" method="POST" class="nieuw-product-form">
            <label for="naam">Productnaam</label>
            <input id="naam" name="naam" type="text" required>

            <label for="ean">EAN</label>
            <input id="ean" name="ean" type="text">

            <label for="categorie">Categorie</label>
            <select id="categorie" name="categorie" required>
              <option value="">Kies categorie</option>
              <option value="fruit">Fruit</option>
              <option value="groente">Groente</option>
              <option value="zuivel">Zuivel</option>
              <option value="bakkerij">Bakkerij</option>
              <option value="overig">Overig</option>
            </select>

            <label for="aantal">Aantal</label>
            <input id="aantal" name="aantal" type="number" min="0" required>

            <button type="submit" class="nieuw-product-btn">Toevoegen</button>
          </form>
        </aside>

      </div> <!-- einde voorraad-grid -->
    </main>
  </section>
</body>
</html>
