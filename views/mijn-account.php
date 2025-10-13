<?php
include '../response/toegang.php';
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
            <img src="../styles/images/logo.png">
        </div>

        <div id="nav">
            <div class="navLink">
                <img src="../styles/images/icon-home.png">
                <a href="../index.php">Home</a>
            </div>
            <div class="navLink active">
                <img src="../styles/images/icon-user.png">
                <a href="mijn-account.php?id=<?=$_SESSION['idgebruiker'] ?>">Mijn account</a>
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

    <main class="accountMain">
      <div class="account-container">
        <h1>Mijn account</h1>

            <!-- Haalt gegevens uit de database op -->
                <?php
                $idgebruiker = $_SESSION['idgebruiker'];


                $stmt = $pdo->prepare('
                SELECT 
                    gebruiker.gebruikersnaam, 
                    gebruiker.idrol, 
                    gebruiker.idgebruiker,
                    rol.rolnaam 
                FROM gebruiker
                INNER JOIN rol ON rol.idrol = gebruiker.idrol
                WHERE gebruiker.idgebruiker = :idgebruiker
                ');
                $stmt->execute(['idgebruiker' => $idgebruiker]);
                $gebruiker = $stmt->fetch(PDO::FETCH_ASSOC);
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
            <form method="POST" class="wachtwoordLine" action="../response/bewerkWachtwoord.php">
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
