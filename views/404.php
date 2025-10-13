<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Pagina Niet Gevonden</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #fff; /* wit */
      color: #000; /* zwarte tekst */
      text-align: center;
    }

    .container {
      background-color: #f0f0f0; /* lichte grijze container */
      padding: 40px 60px;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1); /* zachte zwarte schaduw */
    }

    h1 {
      font-size: 48px;
      margin-bottom: 20px;
      color: #000; /* zwart */
    }

    p {
      font-size: 20px;
      margin-bottom: 30px;
      color: #333; /* iets lichtere zwarte tekst voor leesbaarheid */
    }

    a {
      text-decoration: none;
      color: #fff; /* witte letters */
      background-color: #000; /* zwarte knop */
      padding: 12px 25px;
      border-radius: 8px;
      font-weight: bold;
      transition: all 0.3s;
    }

    a:hover {
      background-color: #333; /* iets lichtere hover */
      transform: translateY(-3px);
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>404</h1>
    <p>Sorry, deze pagina bestaat niet.</p>
    <a href="index.php">Terug naar Home</a>
  </div>
</body>
</html>
