<?php
include '../response/toegang.php';
checkRol(['1'],['2']);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Voorraad</title>
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
                <a href="mijn-account.php?id=<?=$_SESSION['idgebruiker'] ?>">Mijn account</a>
            </div>
<?php if (toonElement(['1'],['2'])): ?>
            <div class="navLink">
                <img src="../styles/images/icon-leverancier.png">
                <a href="leveranciers.php">Leveranciers</a>
            </div>
<?php endif; ?>
<?php if (toonElement(['1'],['2'])): ?>
            <div class="navLink active">
                <img src="../styles/images/icon-voorraad.png">
                <a href="voorraad.php">Voorraad</a>
            </div>
<?php endif; ?>
<?php if (toonElement(['1'],['3'])): ?>
            <div class="navLink">
                <img src="../styles/images/icon-pakket.png">
                <a href="pakketten.php">Pakketten</a>
            </div>
<?php endif; ?>
<?php if (toonElement(['1'])): ?>
            <div class="navLink">
                <img src="../styles/images/icon-klant.png">
                <a href="klanten.php">Klanten</a>
            </div>
<?php endif; ?>
<?php if (toonElement(['1'])): ?>
            <div class="navLink">
                <img src="../styles/images/icon-beheer.png">
                <a href="beheer.php">Beheren</a>
            </div>
<?php endif; ?>
            <form method="POST" action="../response/loguit.php">
              <button type="submit" name="logout" class="blauwBtn">Log uit</button>
            </form>
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
            <a href="product-toevoegen.php" class="btn-product-toevoegen">+ Product toevoegen</a>
          </div>
        </div>

        <!-- Haalt gegevens uit de database op -->
        <?php
        $stmt = $pdo->query('SELECT * FROM product');
        $producten = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($producten as $product){
        ?>

        <a class="content" href="product-bewerken.php?id=<?=$product['idproduct'] ?>">
          <div class="item">
              <div class="item-links">
                <p>
                  <?= htmlspecialchars($product['productnaam']) ?>
                </p>
                <div class="smallertext" id="eanCategorie">
                  <p>
                  <?= htmlspecialchars($product['ean']) ?> |
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
                  <button>Bewerk</button>
                  <img src="../styles/images/arrow.png">
                </div>
              </div>
          </div>
        </a>

        <?php
        }
        ?>

      </section>
    </main>
  </section>
</body>
</html>
