<?php
include '../connection/connection.php';
$pdo = dbConnect();
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
                <a href="index.php">Mijn account</a>
            </div>
            <div class="navLink">
                <img src="../styles/images/icon-leverancier.png">
                <a href="index.php">Leveranciers</a>
            </div>
            <div class="navLink">
                <img src="../styles/images/icon-voorraad.png">
                <a href="voorraad.php">Voorraad</a>
            </div>
            <div class="navLink">
                <img src="../styles/images/icon-pakket.png">
                <a href="index.php">Pakketten</a>
            </div>
            <div class="navLink">
                <img src="../styles/images/icon-klant.png">
                <a href="index.php">Klanten</a>
            </div>
            <div class="navLink">
                <img src="../styles/images/icon-beheer.png">
                <a href="beheer.php">Beheren</a>
            </div>
        </div>
      </header>
     
      <main>
            <h2>Beheer</h2>
        <div class="mainContent">
            <div class="gebruikersTab">
                <div class="contentBoven">
                    <h3>Gebruikers</h3>


                    <?php
                    ?>

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
                $stmt = $pdo->query('SELECT gebruikersnaam, rol FROM gebruiker');
                $gebruikers = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($gebruikers as $gebruiker){
                ?>

                <a href="#" class="content">
                    <div class="item">
                        <div class="item-links">
                        <p>
                            <?= htmlspecialchars($gebruiker['gebruikersnaam']) ?>
                        </p>
                        <p class="smallertext">
                            <?= htmlspecialchars($gebruiker['rol']) ?>
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
                            <button class="blauwBtn">Open overzicht</button>
                        </div>
                    </div>

                </div>
                <div class="addBtn">
                    <a href="gebruikerform.php">Voeg nieuwe gebruikers toe</a>
                </div>
            </div>
        </div>
      </main>
    </section>
</body>
</html>