<?php include '../inc/header.php'; ?>

<<<<<<< HEAD
=======
<?php
include_once "../database/db.php";
include_once "adminController.php";
session_start();
?>

<<<<<<< HEAD
>>>>>>> b36eb68d36940b90b92d56a4b49882ed79520ada
<h2>Se connecter</h2>

<form method="POST" action="">
=======

<h2>Se connecter</h2>



<form method="POST" action="/admin/login">
>>>>>>> 81586c0b795200dea3305601fa8897539bbd16ae
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>
    <label for="password">Mot de passe:</label>
    <input type="password" id="password" name="password" required>
    <input type="submit" name="login" value="Se connecter" />
</form>

<?php
if (isset($_POST["email"]) && !empty($_POST["email"])) {
    $result = $pdo->prepare("SELECT * FROM admins WHERE email = ?");
    $result->execute([$_POST["email"]]);
    $result = $result->fetch(PDO::FETCH_ASSOC);
    var_dump($result);
} else {
    echo 'Invalid email.';
    die();
}

if (isset($_POST["password"]) && !empty($_POST["password"])) {
    if ($result && password_verify($_POST["password"], $result["mot_de_passe"])) {
        echo 'Password is valid!';
        $_SESSION["nom"] = $result["nom_utilisateur"];
        $_SESSION["email"] = $result["email"];
        $_SESSION["isconnect"] = true;
        header("location:dashboard");
    } else {
        echo 'Invalid password.';
        $redirect = "";
        die();
    }
}
?>
<?php include '../inc/footer.php'; ?>