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
        <div class="gegevensForm">
            <div class="form">
                <h3>Bewerk gebruikersnaam</h3>
                <div class="contentInfo">
                    <div class="infoLine">
                       <p style="font-weight: 600;">Gebruikersnaam:</p>
                       <p>gebruikersnaam</p> 
                    </div>
                    <div class="infoLine">
                       <p style="font-weight: 600;">Rol:</p>
                       <p>rol</p> 
                    </div>
                </div>
            </div>
        </div>
      </main>
    </section>
</body>
</html>