<?php
include '../connection/connection.php';
$pdo = dbConnect();
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
            <div>
                <button class="blauwBtn">Log uit</button>
            </div>
        </div>
      </header>

      <main>
            <h2>Klanten</h2>
        <div class="mainContent">
            <div class="gebruikersTab">
                <div class="contentBoven">
                    <div class="heading">
                        <h3>Familie's</h3>
                            <a href="familie-form.php">
                                <button class="btn-product-toevoegen" style="border: none;">
                                + Voeg nieuwe klanten toe
                                </button>
                            </a>
                    </div>
                    <div class="searchbar">
                        <form>
                        <input type="text" id="searchbar" name="searchbar">
                    <input type="submit" value="🔍" class="searchBtn">
                        </form>
                    </div>
                </div>

                <div class="gebruikersRij">
                <!-- Haalt gegevens uit de database op -->
                <?php
                $stmt = $pdo->query('SELECT * FROM klant');
                $klanten = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($klanten as $klant){
                ?>

                <a class="content" href="familie-gegevens.php?id=<?=$klant['idklant'] ?>">
                    <div class="item">
                        <div class="item-links">
                        <p>
                            <?= htmlspecialchars($klant['naam']) ?>
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
        </div>
      </main>
  </section>
</body>
</html>
