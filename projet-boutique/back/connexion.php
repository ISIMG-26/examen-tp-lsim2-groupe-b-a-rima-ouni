<?php
// Paramètres de connexion par défaut pour XAMPP/WAMP
$host = "localhost";
$dbname = "twins_r_boutique"; // Esm l'base de données elli sna3neha
$username = "root"; // L'utilisateur par défaut
$password = ""; // L'mot de passe par défaut fagh (vide)

try {
    // Connexion à la base avec PDO (La meilleure méthode)
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Behi bech ywarina les erreurs ken fama
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Ken l'connexion ma mchetech, ywa9af l'page w y9olna aalech
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>