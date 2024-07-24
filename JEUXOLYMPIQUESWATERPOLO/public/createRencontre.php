<?php
ob_start();
require_once dirname(__DIR__). '/entities/Auth.class.php';
require_once dirname(__DIR__). '/dbConnect/MyDbConnection.php';
require_once dirname(__DIR__). '/entities/rencontres.class.php';

Auth::verifyAdmin();

if (isset($_POST['date'], $_POST['heure'], $_POST['categorie'], $_POST['equipe1'], $_POST['equipe2'], $_POST['score1'], $_POST['score2'], $_POST['statut'])) {
    $date = $_POST['date'];
    $heure = $_POST['heure'];
    $categorie = $_POST['categorie'];
    $equipe1 = $_POST['equipe1'];
    $equipe2 = $_POST['equipe2'];
    $score1 = $_POST['score1'];
    $score2 = $_POST['score2'];
    $statut = $_POST['statut'];

    $message = Rencontre::createRencontre($date, $heure, $categorie, $equipe1, $equipe2, $score1, $score2, $statut);
    echo $message;
} else {
    echo "Tous les champs du formulaire doivent être remplis.";
}

?>

<div class="form-container">
    <form method="POST">
        <label for="date">Date:</label>
        <input type="date" name="date" required><br>
        <label for="heure">Heure:</label>
        <input type="time" name="heure" required><br>
        <label for="categorie">Catégorie:</label>
        <select name="categorie" required>
            <option value="feminine">Féminine</option>
            <option value="masculine">Masculine</option>
        </select><br>
        <label for="equipe1">ID Équipe 1:</label>
        <input type="number" name="equipe1" required><br>
        <label for="equipe2">ID Équipe 2:</label>
        <input type="number" name="equipe2" required><br>
        <label for="score1">Score 1:</label>
        <input type="number" name="score1" required><br>
        <label for="score2">Score 2:</label>
        <input type="number" name="score2" required><br>
        <label for="statut">Statut:</label>
        <select name="statut" required>
            <option value="En cours">En cours</option>
            <option value="Terminé">Terminé</option>
        </select><br>
        <input type="submit" value="Ajouter une rencontre">
    </form>
</div>

<?php
$content = ob_get_clean();
$titre = "Ajouter une rencontre";
require "../public/templatecrud.php";
?>
