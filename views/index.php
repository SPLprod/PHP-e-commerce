<?php
include __DIR__ . '/../inc/header.php';
?>
<h1>Bienvenue dans notre boutique</h1>
<div class="products">

    <?php 
        getAllProducts($pdo);
    ?>
    

    <p>Aucun produit à afficher pour le moment.</p> <!-- Message si aucun produit n'est disponible -->

</div>

<?php include __DIR__ . '/../inc/footer.php'; ?>