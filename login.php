<?php
// login.php
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="./styles/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="login-page">

  <div class="login-container">
    <!-- Logo -->
    <div class="login-logo">
      <img src="styles/images/logo.png" alt="Voedselbank Maaskantje Logo">
    </div>

    <!-- Login Box -->
    <div class="login-box">
      <h2>Login</h2>
      <form action="index.php" method="post">
        <div class="login-input">
          <label for="username">Gebruikersnaam</label>
          <input type="text" id="username" name="username" required>
        </div>

        <div class="login-input">
          <label for="password">Wachtwoord</label>
          <input type="password" id="password" name="password" required>
        </div>

        <button type="submit" class="login-btn">Login</button>
      </form>
    </div>
  </div>

  <!-- Circles in background -->
  <div class="login-circles">
    <div class="circle circle1"></div>
    <div class="circle circle2"></div>
  </div>

</body>
</html>
