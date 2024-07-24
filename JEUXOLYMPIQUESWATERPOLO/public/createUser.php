<?php
ob_start();
require_once dirname(__DIR__). '/entities/Auth.class.php';
require_once dirname(__DIR__). '/dbConnect/MyDbConnection.php';
require_once dirname(__DIR__). '/entities/User.class.php';

Auth::verifyAdmin();

if (isset($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['password'], $_POST['role'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail']; // Utilisation de 'mail' pour correspondre avec le champ de formulaire
    $password = $_POST['password'];
    $role = $_POST['role'];

    $message = User::createUser($nom, $prenom, $mail, $password, $role);
    echo $message;
} else {
    echo "Tous les champs du formulaire doivent être remplis.";
}
?>

<div class="form-container">
    <form method="POST" enctype="multipart/form-data">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" required><br>
        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" required><br>
        <label for="mail">Email:</label>
        <input type="email" name="mail" required><br> 
        <label for="password">Mot de passe:</label>
        <input type="password" name="password" required><br>
        <label for="role">Rôle:</label>
        <select name="role" required>
            <option value="admin">Admin</option>
            <option value="non-admin">Non-Admin</option>
        </select><br>
        <input type="submit" value="Ajouter utilisateur">
    </form>
</div>

<?php
$content = ob_get_clean();
$titre = "Ajouter un utilisateur";
require "../public/templatecrud.php";
?>
