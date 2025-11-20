<?php
try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=site_e-commerce',
        // driver mysql + nom du serveur de la BDD + nom de la BDD 
        'root',   // pseudo de la BDD
        '',   // mdp de la BDD 'root' pour MAC et '' pour Windows
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,  // pour afficher les messages d'erreur SQL
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'  // définition du jeu de caractères des échanges avec la BDD
        ]
    );
        echo '<p>Connexion à la base de données réussie !</p>';

    } catch (PDOException $e) {
        // Si une erreur survient lors de la connexion, on la capture
        echo '<p class="error">Erreur de connexion à la base de données : ' . $e->getMessage() . '</p>';
        // error_log($e->getMessage(), 3, 'chemin/vers/le/fichier_log.log'); // Pour enregistrer l'erreur dans un fichier de log
        die; // Arrête le script si la connexion échoue
    }
