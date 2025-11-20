<?php
<<<<<<< HEAD
 
=======
// session_start();
>>>>>>> b36eb68d36940b90b92d56a4b49882ed79520ada
?>
 
<!DOCTYPE html>
<html lang="fr">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/PHP-e-commerce/public/css/style.css">
    <title>Boutique</title>
</head>
 
<body>
    <header>
        <h1>Boutique Décorations à thèmes</h1>
        <nav>
            <a href="/PHP-e-commerce/">Accueil</a>
<<<<<<< HEAD
 
            <a href="/PHP-e-commerce/register">S'inscrire</a>
            <a href="/PHP-e-commerce/login">Se connecter</a>
            <a href="/PHP-e-commerce/dashboard">Admin</a>
            <a href="/PHP-e-commerce/cart">Panier</a>
=======

            <?php
            if (isset($_SESSION["isconnect"]) && $_SESSION["isconnect"] == true) {
                echo "<a href='/PHP-e-commerce/dashboard'>Admin</a>" . "<a href='/PHP-e-commerce/cart'>Panier</a>";
            } else {
                echo "<a href='/PHP-e-commerce/register'>S'inscrire</a>" . "<a href='/PHP-e-commerce/login'>Se connecter</a>";
            }
            ?>


>>>>>>> b36eb68d36940b90b92d56a4b49882ed79520ada
        </nav>
    </header>
    <main>