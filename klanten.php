<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klanten - Voedselbank Maaskantje</title>
  <link rel="icon" type="image/x-icon" href="./styles/images/logo.png">
  <link rel="stylesheet" href="./styles/klanten.css">
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
          <a href="mijn-account.php">Mijn account</a>
        </div>
        <div class="navLink">
          <img src="./styles/images/icon-pakket.png" alt="">
          <a href="pakketten.php">Pakketten</a>
        </div>
        <div class="navLink active">
          <img src="./styles/images/icon-klant.png" alt="">
          <a href="klanten.php">Klanten</a>
        </div>
      </div>
    </header>

    <main class="mainContent">
      <div class="content-wrapper">
        <div class="header-bar">
          <h1>Klanten (Families)</h1>
          <div class="header-actions">
            <input type="text" placeholder="Zoek familie..." class="zoekbar">
            <button class="blauwBtn">Voeg nieuwe klant toe</button>
          </div>
        </div>

        <div class="familie-lijst">
          <div class="familie-item">
            <div class="familie-info">
              <h2>Familie Jansen</h2>
              <p><strong>Aantal gezinsleden:</strong> 4</p>
              <p><strong>Adres:</strong> Maaskantje 12, Den Dungen</p>
            </div>
            <button class="bekijkBtn">Bekijk</button>
          </div>

          <div class="familie-item">
            <div class="familie-info">
              <h2>Familie De Vries</h2>
              <p><strong>Aantal gezinsleden:</strong> 3</p>
              <p><strong>Adres:</strong> Dorpsstraat 45, Sint-Michielsgestel</p>
            </div>
            <button class="bekijkBtn">Bekijk</button>
          </div>

          <div class="familie-item">
            <div class="familie-info">
              <h2>Familie Bakker</h2>
              <p><strong>Aantal gezinsleden:</strong> 5</p>
              <p><strong>Adres:</strong> Kerklaan 8, Den Dungen</p>
            </div>
            <button class="bekijkBtn">Bekijk</button>
          </div>
        </div>
      </div>
    </main>
  </section>
</body>
</html>
