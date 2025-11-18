<?php
include '../inc/header.php';
?>



<h2>Valider votre commande</h2>
<form action="/checkout" method="POST">
    <label for="client_name">Nom :</label>
    <input type="text" name="client_name" id="client_name" required>

    <label for="client_email">Email :</label>
    <input type="email" name="client_email" id="client_email" required>

    <input type="submit" name="checkout" value="Confirmer la commande">
</form>

<p>Merci pour votre commande ! Un email de confirmation a été envoyé.</p>
<?php include '../inc/footer.php'; ?>