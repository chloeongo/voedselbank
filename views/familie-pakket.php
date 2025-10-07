<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pakketten - Voedselbank Maaskantje</title>
  <link rel="icon" type="image/x-icon" href="./styles/images/logo.png">
  <link rel="stylesheet" href="./styles/familie-pakket.css">
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
        </div>
      </header>

    <main class="content">
      <h1>Pakketten</h1>

      <div class="pakket-grid">
        <div class="card familie-info">
          <h2>Familie’s</h2>
          <div class="card-body">
            <p><strong>Familie:</strong> &lt;Familienaam&gt;</p>
            <p><strong>Allergieën:</strong> &lt;Allergie&gt;</p>
          </div>
        </div>

        <div class="card familie-pakket">
          <h2>Pakket van &lt;familie&gt;</h2>
          <div class="card-body">
            <p>&lt;Product&gt; - &lt;aantal&gt;</p>
            <p>&lt;Product&gt; - &lt;aantal&gt;</p>
          </div>
        </div>

        <div class="card producten">
          <div class="card-header">
            <h2>Producten</h2>
            <input type="text" placeholder=" " class="searchbar">
            <img src="./styles/images/icon-search.png" alt="zoek" class="searchicon">
          </div>
          <div class="card-body scroll">
            <div class="product">
              <p>&lt;Product naam&gt;<br><span>&lt;EAN&gt; - &lt;Categorie&gt;</span></p>
              <span class="amount">&lt;15&gt;</span>
            </div>
            <div class="product">
              <p>&lt;Product naam&gt;<br><span>&lt;EAN&gt; - &lt;Categorie&gt;</span></p>
              <span class="amount">&lt;15&gt;</span>
            </div>
            <div class="product">
              <p>&lt;Product naam&gt;<br><span>&lt;EAN&gt; - &lt;Categorie&gt;</span></p>
              <span class="amount">&lt;15&gt;</span>
            </div>
            <div class="product">
              <p>&lt;Product naam&gt;<br><span>&lt;EAN&gt; - &lt;Categorie&gt;</span></p>
              <span class="amount">&lt;15&gt;</span>
            </div>
          </div>
        </div>
      </div>
    </main>
  </section>
</body>
</html>
