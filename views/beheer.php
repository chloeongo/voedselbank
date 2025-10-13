<?php
include '../response/toegang.php';
checkRol(['1']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beheren</title>
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
                <a href="mijn-account.php?id=<?=$_SESSION['idgebruiker']  ?>">Mijn account</a>
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
            <div class="navLink">
                <img src="../styles/images/icon-klant.png">
                <a href="klanten.php">Klanten</a>
            </div>
<?php endif; ?>
<?php if (toonElement(['1'])): ?>
            <div class="navLink active">
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
            <h2>Beheer</h2>
        <div class="mainContent">
            <div class="gebruikersTab">
                <div class="contentBoven">
                    <div class="heading">
                        <h3>Gebruikers</h3>
                            <a href="gebruikerform.php">
                                <button class="btn-product-toevoegen" style="border: none;">
                                + Voeg nieuwe gebruikers toe
                                </button>
                            </a>
                    </div>
                </div>

                <div class="gebruikersRij">
                <!-- Haalt gegevens uit de database op -->
                <?php
                $stmt = $pdo->query('SELECT 
                                    gebruiker.gebruikersnaam, 
                                    gebruiker.idrol, 
                                    gebruiker.idgebruiker,
                                    rol.rolnaam 
                                FROM gebruiker
                                INNER JOIN rol
                                ON rol.idrol = gebruiker.idrol');

                $gebruikers = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($gebruikers as $gebruiker){
                ?>

                <a class="content" href="bewerkGebruiker.php?id=<?=$gebruiker['idgebruiker'] ?>">
                    <div class="item">
                        <div class="item-links">
                        <p>
                            <?= htmlspecialchars($gebruiker['gebruikersnaam']) ?>
                        </p>
                        <p class="smallertext">
                            <?= htmlspecialchars($gebruiker['rolnaam']) ?>
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
                <div class="beheerOverzicht">
                    <h3>Overzichten</h3>
                    <div>
                        <h4>Producten & leveringen</h4>
                        <div>
                            <a href="maandoverzicht.php">
                            <button class="blauwBtn">Open overzicht</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </main>
    </section>
</body>
</html>