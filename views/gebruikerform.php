<?php
include '../response/toegang.php';
checkRol(['1']);
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
            <div class="navLink">
                <img src="../styles/images/icon-klant.png">
                <a href="klanten.php">Klanten</a>
            </div>
            <div class="navLink active">
                <img src="../styles/images/icon-beheer.png">
                <a href="beheer.php">Beheren</a>
            </div>
            <div>
                <button class="blauwBtn">Log uit</button>
            </div>
        </div>
      </header>
     
      <main>
        <div class="gegevensForm">
            <div class="form">
                <h3>Voeg een account toe</h3>
            <form action="../response/addGebruiker.php" method="post">
                <label for="gebruikersnaam">Gebruikersnaam</label><br>
                <input type="text" id="gebruikersnaam" name="gebruikersnaam"><br>
                <label for="wachtwoord">Wachtwoord</label><br>
                <input type="password" id="wachtwoord" name="wachtwoord"><br>
                <label for="rol">Rol</label>
                    <select id="rol" name="idrol" required>
                        <option value="" disabled selected>Kies een rol</option>
                        <option value="1" name="rol">Directie</option>
                        <option value="2" name="rol">Magazijnmedewerker</option>
                        <option value="3" name="rol">Vrijwilliger</option>
                    </select>            
                <input type="submit" value="Voeg toe" class="blauwBtn" id="submitBtn">
            </form>
            </div>
        </div>
      </main>
    </section>
</body>
</html>