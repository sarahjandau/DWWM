<?php
ob_start();
require_once dirname(__DIR__). '/entities/Auth.class.php';
require_once dirname(__DIR__). '/dbConnect/MyDbConnection.php';
require_once dirname(__DIR__). '/entities/equipes.class.php';

Auth::verifyAdmin();

if (isset($_POST['pays'], $_POST['categorie'], $_POST['victoire'], $_POST['medaille'], $_POST['id_rencontre']) && isset($_FILES['drapeau'])) {
    $pays = $_POST['pays'];
    $categorie = $_POST['categorie'];
    $victoire = $_POST['victoire'];
    $medaille = $_POST['medaille'];
    $id_rencontre = $_POST['id_rencontre'];
    $drapeau = $_FILES['drapeau'];

    $message = Equipe::createEquipe($drapeau, $pays, $categorie, $victoire, $medaille, $id_rencontre);
    echo $message;
} else {
    echo "Tous les champs du formulaire doivent être remplis.";
}

?>

<div class="form-container">
    <form method="POST" enctype="multipart/form-data">
        <label for="pays">Pays:</label>
        <input type="text" name="pays" required><br>
        <label for="categorie">Catégorie:</label>
        <select name="categorie" required>
            <option value="feminine">Féminine</option>
            <option value="masculine">Masculine</option>
        </select><br>
        <label for="victoire">Victoire:</label>
        <input type="number" name="victoire" required><br>
        <label for="medaille">Médaille:</label>
        <input type="number" name="medaille" required><br>
        <label for="id_rencontre">ID Rencontre:</label>
        <input type="number" name="id_rencontre" required><br>
        <label for="drapeau">Choisissez un drapeau:</label>
        <input type="file" name="drapeau" id="drapeau" required><br>
        <input type="submit" value="Ajouter une équipe">
    </form>
</div>


<?php
$content = ob_get_clean();
$titre = "Ajouter une équipe";
require "../public/templatecrud.php";
?>
