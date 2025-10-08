<?php
include '../connection/connection.php';
$pdo = dbConnect();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pakketten - Voedselbank Maaskantje</title>
  <link rel="icon" type="image/x-icon" href="../styles/images/logo.png">
  <link rel="stylesheet" href="../styles/familie-pakket.css">
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
                <a href="pakketten.php">Pakketten</a>
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

    <main class="content">

    <?php
    $stmt = $pdo->query('SELECT * FROM klant');
    $klanten = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($klanten as $klant)
    ?>

      <h1>Pakketten</h1>

      <div class="pakket-grid">
        <div class="card familie-info">
          <h2>Familie <?= htmlspecialchars($klant['naam']) ?></h2>
          <div class="card-body">
            <p><strong>Familie: </strong><?= htmlspecialchars($klant['naam']) ?></p>
            <p><strong>Allergieën: </strong><?= htmlspecialchars($klant['uitzondering']) ?></p>
          </div>
        </div>

        <div class="card familie-pakket">
          <h2>Pakket van <?= htmlspecialchars($klant['naam']) ?></h2>
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
        <?php
        $stmt = $pdo->query('SELECT * FROM product');
        $producten = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($producten as $product){
        ?>

        <a class="content" href="../response/addProductInPakket.php<?=$product['idproduct'] ?>">
          <div class="item">
              <div class="item-links">
                <p>
                  <?= htmlspecialchars($product['productnaam']) ?>
                </p>
                <div class="smallertext" id="eanCategorie">
                  <p>
                  <?= htmlspecialchars($product['ean']) ?> 
                  </p>
                  <p>
                  <?= htmlspecialchars($product['categorie']) ?>
                  </p>
                </div>
              </div>
              <div class="item-rechts">
                <p>
                  <?= htmlspecialchars($product['aantal']) ?> 
                </p>
                <div class="bewerkBtn">
                  <button>Selecteer</button>
                  <img src="../styles/images/arrow.png">
                </div>
              </div>
          </div>
        </a>

        <?php
        }
        ?>
        </div>
      </div>
    </main>
  </section>
</body>
</html>
