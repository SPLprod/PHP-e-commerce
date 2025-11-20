<?php
include __DIR__ . '/../inc/header.php';
var_dump ($prod);
?>
<h1>Bienvenue dans notre boutique</h1>
<div class="products">

<<<<<<< HEAD
    <?php 
        getAllProducts($pdo);
    ?>
    
=======
    <div class="product">
        <h2>Moniteur</h2>
        <img src="moniteur.png" alt="Image 1" />
        <p>Prix: €</p>
        <a href="">Voir détails</a>
        </div>
>>>>>>> 81586c0b795200dea3305601fa8897539bbd16ae


        
    <?php getAllProducts()?>
    <!--<p>Aucun produit à afficher pour le moment.</p> Message si aucun produit n'est disponible -->

</div>

<?php include __DIR__ . '/../inc/footer.php'; ?>