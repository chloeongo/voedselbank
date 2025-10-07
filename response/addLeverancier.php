<?php
include '../connection/connection.php';
session_start();
$pdo = dbConnect();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['bedrijfsnaam']) && !empty($_POST['adres']) && !empty($_POST['contactPersoon'] && !empty($_POST['email']))) {
        try {
            $stmt = $pdo->prepare('INSERT INTO leverancier (bedrijfsnaam, adres, contactPersoon, email) VALUES (:bedrijfsnaam, :adres, :contactPersoon, :email)');

            $stmt->execute([
                'bedrijfsnaam' => $_POST['bedrijfsnaam'],
                'adres' => $_POST['adres'],
                'contactPersoon' => $_POST['contactPersoon'],
                'email' => $_POST['email'],
            ]);

            header("Location: ../views/succes.php");
            exit();
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) { //error 23000 duplicate entry
                echo 'Deze leverancier bestaal al.';
            } 
        }
    } 
}

?>