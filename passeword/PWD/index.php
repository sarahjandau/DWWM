<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Bienvenue sur notre site</h1>
        <p>Veuillez vous inscrire ou vous connecter.</p>
        <a href="inscription.php">Inscription</a>
        <a href="login.php">Connexion</a>
    </div>
</body>
</html>

<?php
// MD5
$passeword = "1234";
$passewordHash = md5($passeword);
var_dump($passeword);
var_dump($passewordHash);

echo "******************** <br>";

// SHA256
$passeword = "1234";
$passewordHash = hash("sha256",$passeword);
var_dump($passeword);
var_dump($passewordHash);

echo "******************** <br>";

$passeword = "1234";
$passewordHash = password_hash($passeword, PASSWORD_DEFAULT);
var_dump($passeword);
var_dump($passewordHash);

echo "******************** <br>";





?>