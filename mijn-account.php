<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mijn account - Voedselbank Maaskantje</title>
  <link rel="icon" type="image/x-icon" href="./styles/images/logo.png">
  <link rel="stylesheet" href="./styles/mijn-account.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bodyLayout">
  <section>
    <header>
      <div id="headerImg">
        <img src="./styles/images/logo.png" alt="logo">
      </div>

      <div id="nav">
        <div class="navLink">
          <img src="./styles/images/icon-home.png" alt="">
          <a href="index.php">Home</a>
        </div>
        <div class="navLink active">
          <img src="./styles/images/icon-user.png" alt="">
          <a href="mijn-account.php">Mijn account</a>
        </div>
        <div class="navLink">
          <img src="./styles/images/icon-leverancier.png" alt="">
          <a href="leveranciers.php">Leveranciers</a>
        </div>
        <div class="navLink">
          <img src="./styles/images/icon-voorraad.png" alt="">
          <a href="voorraad.php">Voorraad</a>
        </div>
        <div class="navLink">
          <img src="./styles/images/icon-pakket.png" alt="">
          <a href="pakketten.php">Pakketten</a>
        </div>
        <div class="navLink">
          <img src="./styles/images/icon-klant.png" alt="">
          <a href="klanten.php">Klanten</a>
        </div>
        <div class="navLink">
          <img src="./styles/images/icon-beheer.png" alt="">
          <a href="beheer.php">Beheren</a>
        </div>
      </div>

      <div class="loginCircle">
        <a href="login.php">Login</a>
      </div>
    </header>

    <main class="mainContent">
      <div class="account-container">
        <h1>Mijn account</h1>

        <div class="account-info">
         <p><strong>Gebruikersnaam:</strong><span class="value">&lt;Gebruikersnaam&gt;</span> <a href="#" class="editLink">Bewerk ></a></p>
          <p><strong>Rol:</strong><span class="value">&lt;Magazijnmedewerker&gt;</span> <a href="#" class="editLink">Bewerk ></a></p>
          <p><strong>Wachtwoord:</strong><span class="value">&lt;*************&gt;</span> <a href="#" class="editLink">Bewerk ></a></p>
        </div>
      </div>
    </main>
  </section>
</body>
</html>
