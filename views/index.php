<?php
include __DIR__ . '/../inc/header.php';
include_once __DIR__ . "/../database/db.php";
?>
<h1>Bienvenue dans notre boutique</h1>
<div class="products">

    <?php 
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
        getAllProducts($pdo);
    ?>
    

    <p>Aucun produit à afficher pour le moment.</p> <!-- Message si aucun produit n'est disponible -->

</div>

<?php include __DIR__ . '/../inc/footer.php'; ?>