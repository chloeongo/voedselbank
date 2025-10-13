<?php
include '../response/toegang.php';
checkRol(['1'],['3']);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pakketten - Voedselbank Maaskantje</title>
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
            <div class="navLink active">
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

      <main>
            <h2>Pakketten</h2>

<div class="mainPakket">
        <div class="mainContent">
        <div class="gebruikersTab" id="familieTab">
                <div class="contentBoven">
                    <div class="heading">
                        <h3>Familie's</h3>
                    </div>
                </div>

                <div class="gebruikersRij">
                <!-- Haalt gegevens uit de database op -->
                <?php
                $stmt = $pdo->query('SELECT * FROM klant');
                $klanten = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($klanten as $klant){
                ?>

                <form class="content" method="POST" action="../response/addPakket.php">
                    <div class="item">
                        <div class="item-links">
                        <p>
                            <?= htmlspecialchars($klant['naam']) ?>
                        </p>
                        </div>
                        <div class="bewerkBtn">
                        <input type="hidden" name="id" value="<?= $klant['idklant'] ?>">
                            <button type="submit">
                                Pakket toewijzen
                            </button>
                            <img src="../styles/images/arrow.png">
                        </div>
                    </div>
                </form>
                
                <?php
                }
                ?>
                </div>
            </div>
        </div>

        <div class="gebruikersTab" id="pakketTab">
                <div class="contentBoven"> 
                    <div class="heading">
                        <h3>Pakketten</h3>
                        <p style="margin-top: -15px;">Gemaakte en nog op te halen pakketten</p>
                    </div>
                </div>

                <div class="gebruikersRij">
                <!-- Haalt gegevens uit de database op -->
                <?php
                $stmt = $pdo->query('
                    SELECT DISTINCT p.idpakket, p.idklant, k.naam
                    FROM pakket p
                    INNER JOIN klant k ON p.idklant = k.idklant
                    INNER JOIN pakket_has_product php ON p.idpakket = php.idpakket
                    WHERE p.uitgifte IS NULL
                ');
                $pakketten = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($pakketten as $pakket) {
                ?>

                <a class="content" href="../views/pakket-gegevens.php?idpakket=<?=$pakket['idpakket']?>&idklant=<?=$pakket['idklant'] ?>">
                    <div class="item">
                        <div class="item-links">
                        <p>
                            <?= htmlspecialchars($pakket['naam']) ?>
                        </p>
                        </div>
                        <div class="bewerkBtn">
                            <button>Status bewerken</button>
                            <img src="../styles/images/arrow.png">
                        </div>
                    </div>
                </a>
                <?php
                }
                ?>
                </div>
            </div>
        </div>
        </div>
      </main>
  </section>
</body>
</html>
