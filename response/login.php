<?php
include '../connection/connection.php';
session_start();
$pdo = dbConnect();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {

        $stmt = $pdo->prepare('SELECT * FROM gebruiker WHERE gebruikersnaam = :gebruikersnaam');
        $stmt->execute(['gebruikersnaam' => $_POST['username']]);
        
        $gebruiker = $stmt->fetch(PDO::FETCH_ASSOC);

        //DEZE MOET NOG AANGEPAST WORDEN. DIT IS VOOR TESTEN.
        //if($gebruiker && password_verify($_POST['password'], $gebruiker['wachtwoord'])) 
        if ($gebruiker && $_POST['password'] === $gebruiker['wachtwoord']) {
            $_SESSION['idgebruiker'] = $gebruiker['idgebruiker'];
            $_SESSION['gebruikersnaam'] = $gebruiker['gebruikersnaam'];

        header("Location: ../index.php");            
        exit();
        } else {
            echo "Verkeerde gebruikersnaam of wachtwoord.";
        }
    } else {
        echo "Niet alle velden zijn ingevuld.";
    }
}


?>