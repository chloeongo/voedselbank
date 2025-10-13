<?php
include '../response/toegang.php';
checkRol(['1'],['2']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leveranciers</title>
    <link rel="icon" type="image/x-icon" href="../styles/images/logo.png">
    <link rel="stylesheet" href="../styles/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
                <a href="mijn-account.php?id=<?=$_SESSION['idgebruiker']?>">Mijn account</a>
            </div>
<?php if (toonElement(['1'],['2'])): ?>
            <div class="navLink active">
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
            <h2>Leveranciers</h2>
        <div class="mainContent">
            <div class="gebruikersTab">
                <div class="contentBoven">
                    <div class="heading">
                        <h3>Bedrijven</h3>
                            <a href="leverancier-toevoegen.php">
                                <button class="btn-product-toevoegen" style="border: none;">
                                + Voeg nieuwe leveranciers toe
                                </button>
                            </a>
                    </div>
                </div>

                <div class="gebruikersRij">
                <!-- Haalt gegevens uit de database op -->
                <?php
                $stmt = $pdo->query('SELECT * FROM leverancier');
                $leveranciers = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($leveranciers as $leverancier){
                ?>

                <a class="content" href="leverancier-bewerken.php?id=<?=$leverancier['idleverancier'] ?>">
                    <div class="item">
                        <div class="item-links">
                        <p>
                            <?= htmlspecialchars($leverancier['bedrijfsnaam']) ?>
                        </p>
                        <p class="smallertext">
                            <?= htmlspecialchars($leverancier['adres']) ?>
                        </p>
                        </div>
                        <div class="bewerkBtn">
                            <button>Bewerk</button>
                            <img src="../styles/images/arrow.png">
                        </div>
                    </div>
                </a>


                <?php
                }
                ?>
                </div>

            </div>

            <div class="beheerRechts">
            <div class="gebruikersTab">
                <div class="contentBoven">
                    <div class="heading">
                        <h3>Volgende leveringen</h3>
                    </div>
                </div>

                <div class="gebruikersRij">
                
                <!-- Haalt gegevens uit de database op -->
                <?php
                $stmt = $pdo->query('SELECT 
                                        levering.idleverancier, 
                                        levering.leveringDatum, 
                                        leverancier.bedrijfsnaam
                                    FROM levering
                                    INNER JOIN leverancier 
                                    ON levering.idleverancier = leverancier.idleverancier');
                $leveringen = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($leveringen as $levering){
                ?>

                <a class="content">
                    <div class="item">
                        <div class="item-links">
                        <p>
                            <?= htmlspecialchars($levering['bedrijfsnaam']) ?>
                        </p>
                        <p class="smallertext">
                            <?= htmlspecialchars($levering['leveringDatum']) ?>
                        </p>
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