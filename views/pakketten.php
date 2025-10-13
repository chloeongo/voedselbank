<?php
include '../response/toegang.php';
checkRol(['1'],['3']);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pakketten - Voedselbank Maaskantje</title>
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
        <?php
        $stmt = $pdo->query('SELECT gebruikersnaam, rol, idgebruiker FROM gebruiker');
        $gebruikers = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($gebruikers as $gebruiker)
        ?>
            <div class="navLink">
                <img src="../styles/images/icon-home.png">
                <a href="../index.php">Home</a>
            </div>
            <div class="navLink">
                <img src="../styles/images/icon-user.png">
                <a href="mijn-account.php?id=<?=$gebruiker['idgebruiker'] ?>">Mijn account</a>
            </div>
            <div class="navLink">
                <img src="../styles/images/icon-leverancier.png">
                <a href="leveranciers.php">Leveranciers</a>
            </div>
            <div class="navLink">
                <img src="../styles/images/icon-voorraad.png">
                <a href="voorraad.php">Voorraad</a>
            </div>
            <div class="navLink active">
                <img src="../styles/images/icon-pakket.png">
                <a href="pakketten.php">Pakketten</a>
            </div>
            <div class="navLink">
                <img src="../styles/images/icon-klant.png">
                <a href="klanten.php">Klanten</a>
            </div>
            <div class="navLink">
                <img src="../styles/images/icon-beheer.png">
                <a href="beheer.php">Beheren</a>
            </div>
            <div>
                <button class="blauwBtn">Log uit</button>
            </div>
        </div>
      </header>

      <main>
            <h2>Pakketten</h2>

<div class="mainPakket">
        <div class="mainContent">
        <div class="gebruikersTab" id="familieTab">
                <div class="contentBoven">
                    <div class="heading">
                        <h3>Familie's</h3>
                    </div>
                    <div class="searchbar">
                        <form>
                        <input type="text" id="searchbar" name="searchbar">
                        <input type="submit" value="🔍" class="searchBtn">
                        </form>
                    </div>
                </div>

                <div class="gebruikersRij">
                <!-- Haalt gegevens uit de database op -->
                <?php
                $stmt = $pdo->query('SELECT * FROM klant');
                $klanten = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($klanten as $klant){
                ?>

                <form class="content" method="POST" action="../response/addPakket.php">
                    <div class="item">
                        <div class="item-links">
                        <p>
                            <?= htmlspecialchars($klant['naam']) ?>
                        </p>
                        </div>
                        <div class="bewerkBtn">
                        <input type="hidden" name="id" value="<?= $klant['idklant'] ?>">
                            <button type="submit">
                                Pakket toewijzen
                            </button>
                            <img src="../styles/images/arrow.png">
                        </div>
                    </div>
                </form>
                
                <?php
                }
                ?>
                </div>
            </div>
        </div>

        <div class="gebruikersTab" id="pakketTab">
                <div class="contentBoven"> 
                    <div class="heading">
                        <h3>Pakketten</h3>
                        <p style="margin-top: -15px;">Gemaakte en nog op te halen pakketten</p>
                    </div>
                </div>

                <div class="gebruikersRij">
                <!-- Haalt gegevens uit de database op -->
                <?php
                $stmt = $pdo->query('
                SELECT DISTINCT idpakket 
                FROM pakket_has_product
                ');
                $pakketten = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($pakketten as $pakket) {
                ?>

                <a class="content" href="../views/pakket-gegevens.php?idpakket=<?=$pakket['idpakket'] ?>">
                    <div class="item">
                        <div class="item-links">
                        <p>
                            <?= htmlspecialchars($klant['naam']) ?>
                        </p>
                        </div>
                        <div class="bewerkBtn">
                            <button>Status bewerken</button>
                            <img src="../styles/images/arrow.png">
                        </div>
                    </div>
                </a>
                <?php
                }
                ?>
                </div>
            </div>
        </div>
        </div>
      </main>
  </section>
</body>
</html>
