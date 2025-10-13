<?php
session_start();

// Simpele login-simulatie
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION['user'] = $_POST['username'] ?? 'onbekend';
    header("Location: loguit.php"); // stuur door naar homepagina
    exit();
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Inloggen - Voedselbank Maaskantje</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background-color: #f8f8fc;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-box {
      background-color: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 300px;
      text-align: center;
    }
    input {
      width: 90%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }
    button {
      background-color: #0dbdaa;
      color: white;
      border: none;
      border-radius: 8px;
      padding: 10px 15px;
      cursor: pointer;
    }
    button:hover {
      background-color: #0ca693;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Inloggen</h2>
    <form method="POST">
      <input type="text" name="username" placeholder="Gebruikersnaam" required>
      <br>
      <button type="submit">Inloggen</button>
    </form>
  </div>
</body>
</html>
