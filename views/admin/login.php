<?php

?>

<p>modif</p>

<h2>Se connecter</h2>



<form method="POST" action="/admin/login">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>
    <label for="password">Mot de passe:</label>
    <input type="password" id="password" name="password" required>
    <input type="submit" name="login" value="Se connecter" />
</form>

