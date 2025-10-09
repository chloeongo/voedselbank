<?php
include '../connection/connection.php';
$pdo = dbConnect();

$stmt = $pdo->query("SELECT productnaam, aantal FROM product");
$producten = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maandoverzicht - Voedselbank Maaskantje</title>
  <link rel="icon" type="image/x-icon" href="../styles/images/logo.png">
  <link rel="stylesheet" href="../styles/maandoverzicht.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  <!-- Chart script voor de grafiek -->
</head>
<body class="bodyLayout">
  <section>
    <header>
      <div id="headerImg">
        <img src="../styles/images/logo.png" alt="logo">
      </div>

      <div id="nav">
        <div class="navLink">
          <img src="../styles/images/icon-home.png" alt="">
          <a href="index.php">Home</a>
        </div>
        <div class="navLink">
          <img src="../styles/images/icon-user.png" alt="">
          <a href="mijn-account.php">Mijn account</a>
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
        <div class="navLink active">
          <img src="../styles/images/icon-klant.png" alt="">
          <a href="klanten.php">Klanten</a>
        </div>
        <div class="navLink">
          <img src="../styles/images/icon-beheer.png" alt="">
          <a href="beheer.php">Beheren</a>
        </div>
      </div>
    </header>

    <!-- Hoofdinhoud -->
    <main class="mainContent">
      <div class="content-wrapper">
        <div class="top-bar">
          <h1>Maandoverzicht</h1>
          <a href="../index.php" class="terugKnop">← Ga terug</a>
        </div>

        <p class="subtitle">Hieronder vind je het overzicht van de productaantallen per maand.</p>

        <div class="chart-container">
          <canvas id="productChart"></canvas>
        </div>
      </div>
    </main>
  </section>

  <!-- Chart script voor de grafiek (dummy conten)-->
  <script>

  const productLabels = <?= json_encode(array_column($producten, 'productnaam')) ?>;
  const productData = <?= json_encode(array_column($producten, 'aantal')) ?>;


    const ctx = document.getElementById('productChart').getContext('2d');

    const productChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: productLabels,
        datasets: [{
          label: 'Aantal producten',
          data: productData,
          borderColor: '#ff8c42',
          backgroundColor: 'rgba(255, 140, 66, 0.15)',
          tension: 0.3,
          borderWidth: 3,
          fill: true,
          pointBackgroundColor: '#ff8c42'
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          y: {
            beginAtZero: true,
            ticks: {
              color: '#254e70',
              font: { family: 'Poppins' }
            },
            grid: { color: 'rgba(0, 0, 0, 0.1)' }
          },
          x: {
            ticks: {
              color: '#254e70',
              font: { family: 'Poppins' }
            },
            grid: { display: false }
          }
        },
        plugins: {
          legend: {
            labels: {
              color: '#254e70',
              font: { family: 'Poppins' }
            }
          }
        }
      }
    });
  </script>
</body>
</html>
