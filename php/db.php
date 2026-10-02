<?php
$serveur="localhost";
$base="base_appareil";
$utilisateur="root";
$mdp="";
try {
    $conn = new PDO(
        "mysql:host=$serveur;dbname=$base",
        $utilisateur,
        $mdp
    );

} catch(PDOException $err) {
    echo "Une erreur est survenu lors de la connexion a la base de donnée : $err";
}