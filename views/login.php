<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="icon" type="image/x-icon" href="../styles/images/logo.png">
  <link rel="stylesheet" href="../styles/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="login-page">

  <div class="login-container">
    <div class="login-logo">
      <img src="../styles/images/logo.png" alt="Voedselbank Maaskantje Logo">
    </div>

    <div class="form" id="loginForm">
      <div id="loginHeading">
      <h2>Log in</h2>
      </div>
      <form action="../response/login.php" method="post">
          <label for="username">Gebruikersnaam</label><br>
          <input type="text" id="username" name="username" required><br>

          <label for="password">Wachtwoord</label><br>
          <input type="password" id="password" name="password" required><br>
          
          <input type="submit" value="Submit" class="blauwBtn" id="submitBtn">
      </form>
    </div>

  </div>

  <div class="login-circles">
    <div class="circle circle1"></div>
    <div class="circle circle2"></div>
  </div>

</body>
</html>
