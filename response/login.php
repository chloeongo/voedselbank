<?php
include '../connection/connection.php';
session_start();
$pdo = dbConnect();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['gebruikersnaam']) && !empty($_POST['wachtwoord'])) {

        $stmt = $pdo->prepare('SELECT * FROM gebruiker WHERE gebruikersnaam = :gebruikersnaam');
        $stmt->execute(['gebruikersnaam' => $_POST['gebruikersnaam']]);
        
        $gebruiker = $stmt->fetch(PDO::FETCH_ASSOC);

        if($gebruiker && password_verify($_POST['wachtwoord'], $gebruiker['wachtwoord'])) {
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