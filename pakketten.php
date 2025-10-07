<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pakketten - Voedselbank Maaskantje</title>
  <link rel="icon" type="image/x-icon" href="./styles/images/logo.png">
  <link rel="stylesheet" href="./styles/pakketten.css">
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
              <img src="./styles/images/icon-pakket.png" alt="">
              <a href="pakketten.php">Pakketten</a>
          </div>
          <div class="navLink">
              <img src="./styles/images/icon-klant.png" alt="">
              <a href="klanten.php">Klanten</a>
          </div>
      </div>
    </header>

    <main class="content">
      <h1>Pakketten</h1>

      <div class="pakketten-box">
        <div class="box-header">
          <h2>Familie’s</h2>
          <div class="search-container">
            <input type="text" placeholder="Zoek familie...">
            <img src="./styles/images/icon-search.png" alt="zoeken">
          </div>
        </div>

        <div class="familie-list">
          <div class="familie-item">
            <span>&lt;Familie naam&gt;</span>
            <span class="pakket-status">&lt;Geen Pakket&gt;</span>
            <button>Pakket toewijzen</button>
          </div>
          <div class="familie-item">
            <span>&lt;Familie naam&gt;</span>
            <span class="pakket-status">&lt;Geen Pakket&gt;</span>
            <button>Pakket toewijzen</button>
          </div>
          <div class="familie-item">
            <span>&lt;Familie naam&gt;</span>
            <span class="pakket-status">&lt;Geen Pakket&gt;</span>
            <button>Pakket toewijzen</button>
          </div>
          <div class="familie-item">
            <span>&lt;Familie naam&gt;</span>
            <span class="pakket-status">&lt;Geen Pakket&gt;</span>
            <button>Pakket toewijzen</button>
          </div>
          <div class="familie-item">
            <span>&lt;Familie naam&gt;</span>
            <span class="pakket-status">&lt;Geen Pakket&gt;</span>
            <button>Pakket toewijzen</button>
          </div>
        </div>
      </div>
    </main>
  </section>
</body>
</html>
