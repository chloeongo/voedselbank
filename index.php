<?php
include './connection/connection.php';
$pdo = dbConnect();
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
            <div class="navLink">
                <img src="./styles/images/icon-home.png">
                <a href="index.php">Home</a>
            </div>
            <div class="navLink">
                <img src="./styles/images/icon-user.png">
                <a href="index.php">Mijn account</a>
            </div>
            <div class="navLink">
                <img src="./styles/images/icon-leverancier.png">
                <a href="index.php">Leveranciers</a>
            </div>
            <div class="navLink">
                <img src="./styles/images/icon-voorraad.png">
                <a href="index.php">Voorraad</a>
            </div>
            <div class="navLink">
                <img src="./styles/images/icon-pakket.png">
                <a href="index.php">Pakketten</a>
            </div>
            <div class="navLink">
                <img src="./styles/images/icon-klant.png">
                <a href="index.php">Klanten</a>
            </div>
            <div class="navLink">
                <img src="./styles/images/icon-beheer.png">
                <a href="index.php">Beheren</a>
            </div>
        </div>
      </header>
     
      <main>
            <h2>Welkom &lt;Gebruiker&gt;</h2>

        <div class="dashboard">
            <div class="card">
                <h3><a href="#">Leveringen</a></h3>

                <?php
                $stmt = $pdo->query('SELECT productnaam FROM product');
                $producten = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($producten as $product){
                ?>

                <a href="#">
                    <div class="item">
                        <div>
                        <p id="productNaam">
                            <?= htmlspecialchars($product['productnaam']) ?>
                        </p>
                        <p id="ean"></p>
                        </div>

                        <div>
                        <p id="aantal"></p>
                        </div>
                    </div>
                </a>
                <?php
                }
                ?>
                
                <div class="item"><a href="#">Leverancier naam - 11/09/2025</a></div>
                <div class="item"><a href="#">Leverancier naam - 12/09/2025</a></div>
                <a href="#" class="button-link">Beheer leveranciers</a>
            </div>

            <div class="card">
                <h3><a href="#">Voorraad</a></h3>
                
            <!-- Haalt gegevens uit de database op -->
                <?php
                $stmt = $pdo->query('SELECT productnaam, ean, aantal FROM product');
                $producten = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($producten as $product){
                ?>

                <a href="#">
                    <div class="item">
                        <div class="item-links">
                        <p id="productNaam">
                            <?= htmlspecialchars($product['productnaam']) ?>
                        </p>
                        <p id="ean">
                            <?= htmlspecialchars($product['ean']) ?>
                        </p>
                        </div>

                        <div>
                        <p id="aantal">
                            <?= htmlspecialchars($product['aantal']) ?>
                        </p>
                        </div>
                    </div>
                </a>
                <?php
                }
                ?>
                <a href="#" class="button-link">Beheer voorraad</a>
            </div>

            <div class="card">
                <h3><a href="#">Klanten</a></h3>
                <div class="item"><a href="#">Familie naam</a></div>
                <div class="item"><a href="#">Familie naam</a></div>
                <div class="item"><a href="#">Familie naam</a></div>
                <a href="#" class="button-link">Beheer klanten</a>
            </div>
        </div>

      </main>
    </section>
</body>
</html>