<?php
include '../response/toegang.php';
checkRol(['1']);
?>


<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klanten - Voedselbank Maaskantje</title>
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
            <div class="navLink">
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
            <div class="navLink active">
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


    <main class="mainContentKlanten">
      <div class="content-wrapper">
        <div class="header-bar">
          <h1>Klanten</h1>
          <div class="header-actions">
            <a href="familie-form.php">
            <button class="blauwBtn">Voeg nieuwe klant toe</button>
            </a>
          </div>
        </div>

        <div class="familie-lijst">
                <!-- Haalt gegevens uit de database op -->
                <?php
                $stmt = $pdo->query('SELECT * FROM klant');
                $klanten = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($klanten as $klant){
                ?>

                <a class="klanten-item" href="familie-gegevens.php?id=<?=$klant['idklant'] ?>">
                    <div class="klanten-info">
                        <div>
                        <h3>
                            <?= htmlspecialchars($klant['naam']) ?>
                        </h3>
                        </div>
                    </div>
                    <div class="bewerkBtn">
                        <button>Bewerk</button>
                        <img src="../styles/images/arrow.png">
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
