<?php
include './connection/connection.php';
include './response/toegang.php';


$pdo = dbConnect();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voedselbank Maaskantje</title>
    <link rel="icon" type="image/x-icon" href="./styles/images/logo.png">
    <link rel="stylesheet" href="./styles/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="bodyLayout" id="homeBody">
    <section>
      <header>
        <div id="headerImg">
            <img src="./styles/images/logo.png">
        </div>

        <div id="nav">
                <?php
                $stmt = $pdo->query('SELECT gebruikersnaam, rol, idgebruiker FROM gebruiker');
                $gebruikers = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($gebruikers as $gebruiker)
                ?>
            <div class="navLink active">
                <img src="./styles/images/icon-home.png">
                <a href="index.php">Home</a>
            </div>
            <div class="navLink">
                <img src="./styles/images/icon-user.png">
                <a href="/voedselbank/views/mijn-account.php?id=<?=$gebruiker['idgebruiker'] ?>">Mijn account</a>
            </div>
            <div class="navLink">
                <img src="./styles/images/icon-leverancier.png">
                <a href="/voedselbank/views/leveranciers.php">Leveranciers</a>
            </div>
            <div class="navLink">
                <img src="./styles/images/icon-voorraad.png">
                <a href="/voedselbank/views/voorraad.php">Voorraad</a>
            </div>
            <div class="navLink">
                <img src="./styles/images/icon-pakket.png">
                <a href="/voedselbank/views/pakketten.php">Pakketten</a>
            </div>
            <div class="navLink">
                <img src="./styles/images/icon-klant.png">
                <a href="/voedselbank/views/klanten.php">Klanten</a>
            </div>
            <div class="navLink">
                <img src="./styles/images/icon-beheer.png">
                <a href="/voedselbank/views/beheer.php">Beheren</a>
            </div>
            <div>
                <button class="blauwBtn">Log uit</button>
            </div>
        </div>
      </header>
     
      <main>
            <h2 id="welkomH2">Welkom <?= htmlspecialchars($_SESSION['gebruikersnaam']) ?></h2>

        <div class="dashboard">
            <div class="card">
                <h3><a href="#">Leveringen</a></h3>
            
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

                <a href="#" class="content">
                    <div class="item">
                        <div class="item-links">
                        <p id="productNaam">
                            <?= htmlspecialchars($levering['bedrijfsnaam']) ?>
                        </p>
                        <p id="ean">
                            <?= htmlspecialchars($levering['leveringDatum']) ?>
                        </p>
                        </div>
                    </div>
                </a>
                <?php
                }
                ?>
                <button class="blauwBtn" id="blauwBtnHome">Beheer leveranciers</button>
            </div>

            <div class="card">
                <h3><a href="#">Voorraad</a></h3>
                
            <!-- Haalt gegevens uit de database op -->
                <?php
                $stmt = $pdo->query('SELECT productnaam, ean, aantal FROM product');
                $producten = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($producten as $product){
                ?>

                <a href="#" class="content">
                    <div class="item">
                        <div class="item-links">
                        <p id="productNaam">
                            <?= htmlspecialchars($product['productnaam']) ?>
                        </p>
                        <p class="smallertext">
                            <?= htmlspecialchars($product['ean']) ?>
                        </p>
                        </div>

                        <div>
                        <p >
                            <?= htmlspecialchars($product['aantal']) ?>
                        </p>
                        </div>
                    </div>
                </a>
                <?php
                }
                ?>
                <button class="blauwBtn" id="blauwBtnHome">Beheer voorraad</button>
            </div>

            <div class="card">
                <h3><a href="#">Klanten</a></h3>
           
                <!-- Haalt gegevens uit de database op -->
                <?php
                $stmt = $pdo->query('SELECT naam FROM klant');
                $families = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($families as $familie){
                ?>

                <a href="#" class="content">
                    <div class="item">
                        <div class="item-links">
                        <p id="familieNaam">
                            <?= htmlspecialchars($familie['naam']) ?>
                        </p>
                        </div>
                    </div>
                </a>
                <?php
                }
                ?>
                <button class="blauwBtn" id="blauwBtnHome">Beheer klanten</button>
            </div>
        </div>

      </main>
    </section>
</body>
</html>