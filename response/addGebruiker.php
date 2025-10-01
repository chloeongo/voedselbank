<?php
include '../connection/connection.php';
session_start();
$pdo = dbConnect();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['gebruikersnaam']) && !empty($_POST['wachtwoord']) && !empty($_POST['rol'])) {
        try {
            $stmt = $pdo->prepare('INSERT INTO gebruiker (gebruikersnaam, wachtwoord, rol) VALUES (:gebruikersnaam, :wachtwoord, :rol)');

            $stmt->execute([
                'gebruikersnaam' => $_POST['gebruikersnaam'],
                'wachtwoord' => password_hash($_POST['wachtwoord'], PASSWORD_BCRYPT),
                'rol' => $_POST['rol'],

            ]);

            header("Location: ../views/succes.php");
            exit();
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) { //error 23000 duplicate entry
                echo 'Deze gebruikersnaam is al in gebruik.';
            } 
        }
    } 
}

?>