<?php
include '../connection/connection.php';
$pdo = dbConnect();
session_start();

// Controleer of gebruiker is ingelogd
if (!isset($_SESSION['idgebruiker'])) {
    // Als niet ingelogd, direct door naar login
    header("Location: ../views/login.php");
    exit();
}

// Uitlogactie afhandelen
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: ../views/login.php"); // ga écht van de site af (terug naar login)
    exit();
}
?>
