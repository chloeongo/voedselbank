<?php
include '../connection/connection.php';
session_start();
$pdo = dbConnect();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        !empty($_POST['naam']) &&
        !empty($_POST['adres']) &&
        !empty($_POST['postcode']) &&
        !empty($_POST['telefoonnummer']) &&
        !empty($_POST['email']) &&
        !empty($_POST['volwassene']) &&
        !empty($_POST['kind']) &&
        !empty($_POST['baby']) &&
        !empty($_POST['uitzondering'])
){
        try {
            $stmt = $pdo->prepare('INSERT INTO klant (naam, adres, postcode, telefoonnummer, email, volwassene, kind, baby, uitzondering) VALUES (:naam, :adres, :postcode, :telefoonnummer, :email, :volwassene, :kind, :baby, :uitzondering)');

            $stmt->execute([
                'naam' => $_POST['naam'],
                'adres' => $_POST['adres'],
                'postcode' => $_POST['postcode'],
                'telefoonnummer' => $_POST['telefoonnummer'],
                'email' => $_POST['email'],
                'volwassene' => $_POST['volwassene'],
                'kind' => $_POST['kind'],
                'baby' => $_POST['baby'],
                'uitzondering' => $_POST['uitzondering'],
            ]);

            header("Location: ../views/succes.php");
            exit();
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) { //error 23000 duplicate entry
                echo 'Dit gezin bestaal al.';
            } 
        }
    } 
}

?>