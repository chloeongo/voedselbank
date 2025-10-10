<?php
include '../connection/connection.php';
session_start();
$pdo = dbConnect();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['gebruikersnaam']) && !empty($_POST['wachtwoord']) && !empty($_POST['idrol'])) {
        try {
            $stmt = $pdo->prepare('INSERT INTO gebruiker (gebruikersnaam, wachtwoord, idrol) VALUES (:gebruikersnaam, :wachtwoord, :idrol)');

            $stmt->execute([
                'gebruikersnaam' => $_POST['gebruikersnaam'],
                'wachtwoord' => password_hash($_POST['wachtwoord'], PASSWORD_DEFAULT),                  
                'idrol' => $_POST['idrol'],

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