<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if (isset($_POST['envoyer'])) {
    if (!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirmation']) && !empty($_POST['date']) && !empty($_POST['option'])) {
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmation = $_POST['confirmation'];
        $date = $_POST['date'];
        $option = $_POST['option'];

        if ($password !== $confirmation) {
            echo 'Les mots de passe ne correspondent pas.';
            return;
        }
        echo 'Inscription réussie !';
    } else {
        echo 'Tous les champs sont obligatoires.'; //mettre des filter partout pour securiser au maximum les données //
    }
}
?>

<form action="index.php" method="POST"> 
    <p>Formulaire d'inscription :</p> 

    <label for="nom">Entrez votre nom complet :</label>
    <input type="text" id="nom" name="nom" value="<?= isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : '' ?>">

    <label for="email">Entrez votre adresse mail :</label><br>
    <input type="email" name="email" id="email" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">

    <label for="password">Mot de passe :</label>
    <input type="password" pattern="{8}" id="password" name="password" minlength="8" maxlength="8" required>


    <label for="confirmation">Confirmation du mot de passe :</label>
    <input type="password" id="confirmation" name="confirmation" value="">

    <label for="date">Date de naissance :</label>
    <input type="date" id="date" name="date" value="<?= isset($_POST['date']) ? htmlspecialchars($_POST['date']) : '' ?>">

    <p>Sexe :</p>

    <label for="option1">Femme</label>
    <input type="radio" id="option1" name="option" value="Femme" <?= isset($_POST['option']) && $_POST['option'] === 'Femme' ? 'checked' : '' ?>>

    <label for="option2">Homme</label>
    <input type="radio" id="option2" name="option" value="Homme" <?= isset($_POST['option']) && $_POST['option'] === 'Homme' ? 'checked' : '' ?>>

    <input type="submit" name="envoyer" value="envoyer">
</form>

    
</body>
</html>