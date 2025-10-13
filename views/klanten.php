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
  <link rel="stylesheet" href="../styles/klanten.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bodyLayout">
  <section>
      <header>
        <div id="headerImg">
            <img src="../styles/images/logo.png">
        </div>

        <div id="nav">
                <?php
                $stmt = $pdo->query('SELECT gebruikersnaam, rol, idgebruiker FROM gebruiker');
                $gebruikers = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($gebruikers as $gebruiker)
                ?>
            <div class="navLink">
                <img src="../styles/images/icon-home.png">
                <a href="../index.php">Home</a>
            </div>
            <div class="navLink">
                <img src="../styles/images/icon-user.png">
                <a href="mijn-account.php?id=<?=$gebruiker['idgebruiker'] ?>">Mijn account</a>
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


    <main class="mainContent">
      <div class="content-wrapper">
        <div class="header-bar">
          <h1>Klanten</h1>
          <div class="header-actions">
            <input type="text" placeholder="Zoek familie..." class="zoekbar">
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

                <a class="familie-item" href="familie-gegevens.php?id=<?=$klant['idklant'] ?>">
                    <div class="familie-info">
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
