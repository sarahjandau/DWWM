<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Formulaire de connexion</h2>
        <form action="login.php" method="post">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Se connecter">
        </form>
    </div>
</body>
</html>

<?php
require_once "dbConnect.php";

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    var_dump($email);
    var_dump($password);

    $req = $db->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
    $req->bindValue('email', $email);
    $req->bindValue('password', $password);
    $req->execute();
    $resultat = $req->fetch(PDO::FETCH_ASSOC);

    var_dump($resultat);

    if($resultat){
        $passwordHash = $resultat['password'];
        if(password_verify($password, $passwordHash))
             echo "Connexion réussie";
    }else{
        echo "Identifiant ou mot de passe invalide";
    }


}
?>
