<?php
include '../response/bewerkWachtwoord.php';

?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mijn account - Voedselbank Maaskantje</title>
  <link rel="icon" type="image/x-icon" href="../styles/images/logo.png">
  <link rel="stylesheet" href="../styles/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bodyLayout">
  <section>
    <header>
      <div id="headerImg">
        <img src="../styles/images/logo.png" alt="logo">
      </div>

      <div id="nav">
                <?php
                $stmt = $pdo->query('SELECT idgebruiker FROM gebruiker');
                $gebruikers = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($gebruikers as $gebruiker)
                ?>
        <div class="navLink">
          <img src="../styles/images/icon-home.png" alt="">
          <a href="../index.php">Home</a>
        </div>
        <div class="navLink active">
            <img src="../styles/images/icon-user.png">
            <a href="mijn-account.php?id=<?=$gebruiker['idgebruiker'] ?>">Mijn account</a>
        </div>
        <div class="navLink">
          <img src="../styles/images/icon-leverancier.png" alt="">
          <a href="leveranciers.php">Leveranciers</a>
        </div>
        <div class="navLink">
          <img src="../styles/images/icon-voorraad.png" alt="">
          <a href="voorraad.php">Voorraad</a>
        </div>
        <div class="navLink">
          <img src="../styles/images/icon-pakket.png" alt="">
          <a href="pakketten.php">Pakketten</a>
        </div>
        <div class="navLink">
          <img src="../styles/images/icon-klant.png" alt="">
          <a href="klanten.php">Klanten</a>
        </div>
        <div class="navLink">
          <img src="../styles/images/icon-beheer.png" alt="">
          <a href="beheer.php">Beheren</a>
        </div>
        <button class="blauwBtn">Log uit</button>
       </div>
    </header>

    <main class="accountMain">
      <div class="account-container">
        <h1>Mijn account</h1>

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

                foreach ($gebruikers as $gebruiker)
                ?>

        <div class="account-info">
        <p class="account-p">
          <strong>Gebruikersnaam:</strong>
          <?= htmlspecialchars($gebruiker['gebruikersnaam']) ?>
        </p>
        <p class="account-p">
          <strong>Rol:</strong>
          <?= htmlspecialchars($gebruiker['rolnaam']) ?>
        </p>
        <div class="wachtwoordBewerken" id="wachtwoordBewerken">
        <p>
          <strong>Wachtwoord:</strong>
        </p>
            <form method="POST" class="wachtwoordLine">
                <input id="bewerkInput" type="password" name="wachtwoord" value="">                        
        
                <div class="bewerkBtn">
                    <button type="submit">Opslaan</button>
                </div>
            </form>
        </div>    
        </div>
        </div>
      </div>
    </main>
  </section>
</body>
</html>
