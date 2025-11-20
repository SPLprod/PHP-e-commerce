<?php

$baseUri = '/PHP-e-commerce';

// Fonction pour gérer l'inscription
function handleRegister()
{
    include __DIR__ . '/../views/admin/register.php';
}

// Fonction pour gérer la connexion
function handleLogin()
{
    global $pdo;
    include __DIR__ . '/../views/admin/login.php';

}

// Fonction pour afficher le tableau de bord
function dashboard()
{
    include __DIR__ . '/../views/admin/dashboard.php';
}

// Fonction pour récupérer les commandes
function getOrders()
{
    // select produits dans le bdd
    global $pdo;
    $resultat = $pdo->query("SELECT * FROM products");
    $result = $resultat->fetch(PDO::FETCH_ASSOC);
}
function viewOrders()
{
    // $orders = getOrders()
    global $pdo;

    include __DIR__ . '/../views/admin/orders.php';
}

// Gestion de la déconnexion
function logout() {}
