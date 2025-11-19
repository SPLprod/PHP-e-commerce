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
    include __DIR__ . '/../views/admin/login.php';
}

// Fonction pour afficher le tableau de bord
function dashboard()
{
    include __DIR__ . '/../views/admin/dashboard.php';
}

// Fonction pour récupérer les commandes
function getOrders() {}

// Fonction pour afficher les commandes
function viewOrders() {}

// Gestion de la déconnexion
function logout() {}
