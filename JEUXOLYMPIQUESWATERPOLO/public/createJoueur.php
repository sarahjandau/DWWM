<?php
ob_start();
require_once dirname(__DIR__). '/entities/Auth.class.php';
require_once dirname(__DIR__). '/dbConnect/MyDbConnection.php';
require_once dirname(__DIR__). '/entities/joueurs.class.php';

Auth::verifyAdmin();

if (isset($_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['posteoccupe'], $_POST['id_equipe']) && isset($_FILES['image'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $posteoccupe = $_POST['posteoccupe'];
    $id_equipe = $_POST['id_equipe'];
    $image = $_FILES['image'];

    $message = Joueur::createJoueur($nom, $prenom, $age, $posteoccupe, $id_equipe, $image);
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
        <label for="age">Age:</label>
        <input type="number" name="age" required><br> 
        <label for="posteoccupe">Poste occupé:</label>
        <select name="posteoccupe" required>
            <option value="Attaquant">Attaquant</option>
            <option value="Defenseur">Défenseur</option>
            <option value="Gardien de but">Gardien</option>
        </select><br>
        <label for="id_equipe">Id Equipe:</label>
        <input type="number" name="id_equipe" required><br>
        <label for="image">Choisissez une image:</label>
        <input type="file" name="image" id="image" required><br>
        <input type="submit" value="Ajouter un joueur">
    </form>
</div>

<?php
$content = ob_get_clean();
$titre = "Ajouter un joueur";
require "../public/templatecrud.php";
?>
