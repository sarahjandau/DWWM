<?php
ob_start();
require_once "auth.php";

verifAdmin();

if(isset($_POST['nom'],$_POST['prenom'],$_POST['password'],$_POST['telephone'],$_POST['role'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $password = $_POST['password'];
    $telephone = $_POST['telephone'];
    $role = $_POST['role'];

    $pdo = getPDOConnexion();

    $stmt = $pdo->prepare('INSERT INTO users(nom, prenom,motdepasse,telephone) VALUES (?, ?, ?, ?)');
    $stmt->execute([$nom,$prenom,$password,$telephone]);

    $userId = $pdo->lastInsertId();

    $stmt = $pdo->prepare('INSERT INTO userroles (user_id, role) VALUES (?,?)') ;
    $stmt->execute([$userId,$role]);

    echo "Utilisateur ajouté avec succès";
}else{
    echo "Tous les champs ne sont pas remplis";
}

?>

<?php

$password = " ";
$passwordHash = password_hash($password, PASSWORD_DEFAULT);
var_dump($password);
var_dump($passwordHash);

echo "******************** <br>";

?>

<?php
require_once "dbConnect.php";

if (!empty($_POST['password'])) {
    $password = $_POST['password'];

    var_dump($password);

    $req = $db->prepare('SELECT * FROM users WHERE password = :password');
    $req->bindValue('motdepasse', $passwordHash);
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



<div class="form-container">
    <form method="POST">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" required><br>

        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" required><br>

        <label for="Motdepasse">Mot de passe:</label>
        <input type="password" name="password" required><br>

        <label for="telephone">Téléphone:</label>
        <input type="text" name="telephone" required><br>

        <label for="role">Rôle:</label>

        <select name="role" required>
            <option value="admin">Admin</option>
            <option value="non-admin">Non-Admin</option>
        </select><br>

        <input type="submit" value="Ajouter">
    </form>
</div>



<?php
$content =  ob_get_clean();
$titre = "Ajouter un utilisateur";
require "template.php";
?>