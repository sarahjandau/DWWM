<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire d'inscription</title>
</head>
<body>

<?php
    session_start();

    if (isset($_SESSION['nom']) && isset($_SESSION['mail'])){
        echo "<p> Inscription réussie </p>";
        echo "<p> Vous êtes : ". $_SESSION['nom'] . " </p>";
        echo "<p> Votre mail : ". $_SESSION['mail'] . " </p>";
    }
    

    if(isset($_SESSION['nom'])){
        echo "L'utilisateur est connecté : " . $_SESSION['nom'];
    }else{
        echo "L'utilisateur n'est pas connecté";
    }

    // securisation du mot de passe 

    if(isset($_POST['password'])){
        $passeword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
    }else{
        if (strlen($password) < 8) {
            echo "Le mot de passe doit contenir au moins 8 caractères.";
        }
        
    }


?>
<div class="form-container">
    <form action="login.php" method="POST"> 
        <p>Formulaire d'inscription :</p> 

        <label for="nom">Votre nom :</label>
        <input type="text" id="nom" name="nom" value="<?= isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : '' ?>">

        <label for="email">Votre mail :</label><br>
        <input type="email" name="email" id="email" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">

        <label for="password">Mot de passe :</label>
        <input type="password" pattern="{8}" id="password" name="password" minlength="8" maxlength="8" required>

        <input type="submit" name="envoyer" value="envoyer">

    </form>
</div>
    
</body>
</html>