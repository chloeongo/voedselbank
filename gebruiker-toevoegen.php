<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gebruikers - Voedselbank Maaskantje</title>
  <link rel="icon" type="image/x-icon" href="./styles/images/logo.png">
  <link rel="stylesheet" href="./styles/gebruiker-toevoegen.css">
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
        <div class="navLink">
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
        <div class="navLink active">
          <img src="./styles/images/icon-beheer.png" alt="">
          <a href="beheer.php">Beheren</a>
        </div>
      </div>
    </header>

    <main class="mainContent">
      <div class="formContainer">
        <h2>Maak een account aan</h2>

        <form action="#" method="POST">
          <label for="gebruikersnaam">Gebruikersnaam</label>
          <input type="text" id="gebruikersnaam" name="gebruikersnaam" placeholder="Voer gebruikersnaam in" required>

          <label for="wachtwoord">Nieuw wachtwoord</label>
          <input type="password" id="wachtwoord" name="wachtwoord" placeholder="Voer wachtwoord in" required>

          <label for="rol">Rol</label>
          <select id="rol" name="rol" required>
            <option value="" disabled selected>Kies een rol</option>
            <option value="magazijnmedewerker">Magazijnmedewerker</option>
            <option value="vrijwilliger">Vrijwilliger</option>
            <option value="directie">Directie</option>
          </select>

          <button type="submit" class="toevoegBtn">Voeg toe</button>
        </form>
      </div>
    </main>
  </section>
</body>
</html>
