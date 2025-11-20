<?php include '../inc/header.php'; ?>
<?php
session_start();
?>

<h2>Tableau de bord admin</h2>

<div>
    <h3>Bonjour <?php echo $_SESSION["nom"] ?></h3>
</div>

<div>
    <a href="/admin/orders">Voir les commandes</a> <!-- Lien vers la page des commandes -->
</div>

<div class="products">
    <div class="product">

    </div>
</div>

<a href="/admin/logout">Se déconnecter</a>

<?php include '../inc/footer.php'; ?>