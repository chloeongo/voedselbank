<?php
include '../connection/connection.php';
session_start();
$pdo = dbConnect();

function checkRol($toegestaneRollen = []) {
    if (!isset($_SESSION['idrol'])) {
        // niet ingelogd > terug naar login
        header("Location: ./views/login.php");
        exit();
    }

    // als gebruiker niet een toegestane rol heeft redirect > geen toegang
    if (!in_array($_SESSION['idrol'], $toegestaneRollen)) {
        header("Location: ../views/geen_toegang.php");
        exit();
    }
}
?>