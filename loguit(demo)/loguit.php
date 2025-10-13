<?php
session_start();

// Controleer of gebruiker is ingelogd
if (!isset($_SESSION['user'])) {
    // Als niet ingelogd, direct door naar login
    header("Location: login.php");
    exit();
}

// Uitlogactie afhandelen
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: login.php"); // ga écht van de site af (terug naar login)
    exit();
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Voedselbank Maaskantje - Home</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      margin: 0;
      background-color: #f8f8fc;
      color: #1a2b4c;
    }

    .sidebar {
      width: 200px;
      height: 100vh;
      background-color: #f6f7ff;
      position: fixed;
      top: 0;
      left: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding-top: 20px;
      border-right: 1px solid #e6e6f0;
    }

    .sidebar h2 {
      color: #f25c2a;
      font-weight: 600;
      margin-bottom: 40px;
      text-align: center;
    }

    .sidebar a {
      text-decoration: none;
      color: #1a2b4c;
      padding: 10px;
      width: 100%;
      text-align: center;
      transition: background 0.3s;
      border-radius: 8px;
    }

    .sidebar a:hover {
      background-color: #d4f5f0;
      color: #1a2b4c;
    }

    .content {
      margin-left: 220px;
      padding: 40px;
    }

    .logout-btn {
      background-color: #0dbdaa;
      color: white;
      border: none;
      border-radius: 20px;
      padding: 10px 20px;
      cursor: pointer;
      font-size: 14px;
      transition: background 0.3s;
      margin-top: auto;
      margin-bottom: 30px;
    }

    .logout-btn:hover {
      background-color: #0ca693;
    }

    .card {
      background-color: white;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
      max-width: 600px;
    }

    h1 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    p {
      font-size: 15px;
      color: #444;
    }
  </style>
</head>
<body>

  <div class="sidebar">
    <h2>Voedselbank<br>Maaskantje</h2>
    <a href="#">Home</a>
    <a href="#">Mijn account</a>
    <a href="#">Leveranciers</a>
    <a href="#">Voorraad</a>
    <a href="#">Pakketten</a>
    <a href="#">Aanvragen</a>
    <a href="#">Beheren</a>

    <form method="POST">
      <button type="submit" name="logout" class="logout-btn">Uitloggen</button>
    </form>
  </div>

  <div class="content">
    <div class="card">
      <h1>Welkom bij de Voedselbank Maaskantje</h1>
      <p>Je bent ingelogd als <strong><?php echo htmlspecialchars($_SESSION['user']); ?></strong>.</p>
      <p>Gebruik het menu aan de linkerkant om door het systeem te navigeren.</p>
    </div>
  </div>

</body>
</html>
