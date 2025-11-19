<?php include '../inc/header.php'; ?>

<?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     dashboard();
// }
?>

<h2>Se connecter</h2>



<form method="POST" action="/PHP-e-commerce/dashboard">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>
    <label for="password">Mot de passe:</label>
    <input type="password" id="password" name="password" required>
    <input type="submit" name="login" value="Se connecter" />
</form>
<?php include '../inc/footer.php'; ?>