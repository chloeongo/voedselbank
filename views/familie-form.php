<?php
include '../connection/connection.php';
$pdo = dbConnect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beheer</title>
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
        </div>
      </header>
     
      <main class="familieForm">
        <div class="gegevensForm">
            <div class="form">
                <h3>Voeg een klant toe</h3>
            <form action="../response/addKlant.php" method="post">
                <label for="gebruikersnaam">Familie naam</label><br>
                <input type="text" id="gebruikersnaam" name="naam"><br>
                <label for="wachtwoord">Adres</label><br>
                <input type="text" id="adres" name="adres"><br>
                <label for="rol">Postcode</label><br>
                <input type="text" id="postcode" name="postcode"><br><br>
                <label for="rol">Telefoonnummer</label><br>
                <input type="text" id="telefoonnummer" name="telefoonnummer"><br><br>
                <label for="rol">E-mail</label><br>
                <input type="text" id="email" name="email"><br><br>
                <label for="rol">Volwassene</label><br>
                <input type="number" id="volwassene" name="volwassene"><br><br>
                <label for="rol">Kinderen</label><br>
                <input type="number" id="kind" name="kind"><br><br>
                <label for="rol">Baby's</label><br>
                <input type="number" id="baby" name="baby"><br><br>
                <label for="rol">Uitzonderingen</label><br>
                <input type="text" id="uitzondering" name="uitzondering" style="min-height:100px;"><br><br>
            <input type="submit" value="Voeg toe" class="blauwBtn" id="submitBtn">
            </form>
            </div>
        </div>
      </main>
    </section>
</body>
</html>