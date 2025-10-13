<?php
include '../connection/connection.php';
$pdo = dbConnect();
session_start();

function checkRol($toegestaneRollen = []) {
    if (!isset($_SESSION['idrol'])) {
        // niet ingelogd > terug naar login
        header("Location: ../views/login.php");
        exit();
    }

    // als gebruiker niet een toegestane rol heeft redirect > geen toegang
    if (!in_array($_SESSION['idrol'], $toegestaneRollen)) {
        header("Location: ../views/geentoegang.php");
        exit();
    }
}

// Functie om te checken of een element getoond mag worden
function toonElement($toegestaneRollen = []) {
    if (!isset($_SESSION['idrol'])) return false;
    return in_array($_SESSION['idrol'], $toegestaneRollen);
}
?>