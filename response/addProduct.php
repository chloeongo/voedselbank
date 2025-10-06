<?php
include '../connection/connection.php';
session_start();
$pdo = dbConnect();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['productnaam']) && !empty($_POST['ean']) && !empty($_POST['aantal'] && !empty($_POST['categorie']))) {
        try {
            $stmt = $pdo->prepare('INSERT INTO product (productnaam, ean, aantal, categorie) VALUES (:productnaam, :ean, :aantal, :categorie)');

            $stmt->execute([
                'productnaam' => $_POST['productnaam'],
                'ean' => $_POST['ean'],
                'aantal' => $_POST['aantal'],
                'categorie' => $_POST['categorie'],
            ]);

            header("Location: ../views/succes.php");
            exit();
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) { //error 23000 duplicate entry
                echo 'Dit product bestaal al.';
            } 
        }
    } 
}

?>