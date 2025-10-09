<?php
include '../connection/connection.php';
session_start();
$pdo = dbConnect();

//gegevens rollen
$stmt = $pdo->query('SELECT * FROM rol');
$rollen = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($rollen as $rol)

//gegevens gebruikers
$stmt = $pdo->query('SELECT * FROM gebruiker');
$gebruikers = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($gebruikers as $gebruiker)


?>