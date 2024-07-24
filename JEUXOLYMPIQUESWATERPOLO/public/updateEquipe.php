<?php
ob_start();
require_once dirname(__DIR__) . '/entities/Auth.class.php';
require_once dirname(__DIR__) . '/entities/equipes.class.php';

Auth::verifyAdmin();

$equipe = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id_equipe'], $_POST['pays'], $_POST['categorie'], $_POST['victoire'], $_POST['medaille']) && isset($_FILES['drapeau'])) {
        $id_equipe = $_POST['id_equipe'];
        $pays = $_POST['pays'];
        $categorie = $_POST['categorie'];
        $victoire = $_POST['victoire'];
        $medaille = $_POST['medaille'];
        $drapeau = $_FILES['drapeau'];

        $message = Equipe::updateEquipe($drapeau, $pays, $categorie, $victoire, $medaille, $id_equipe);
        echo $message;

        $equipe = Equipe::getEquipeById($id_equipe);
    } else {
        echo "Tous les champs doivent être remplis.";
    }
} elseif (isset($_GET['id_equipe'])) {
    $equipe = Equipe::getEquipeById($_GET['id_equipe']);

    if (!$equipe) {
        echo "Équipe non trouvée.";
        exit();
    }
} else {
    echo "Aucun ID d'équipe fourni.";
    exit();
}
?>

<div class="form-container">
    <?php if ($equipe) : ?>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_equipe" value="<?php echo htmlspecialchars($equipe['id_equipe']); ?>">
            <label for="pays">Pays:</label>
            <input type="text" name="pays" value="<?php echo htmlspecialchars($equipe['pays']); ?>" required><br>
            <label for="categorie">Catégorie:</label>
            <select name="categorie" required>
                <option value="feminine" <?php if ($equipe['categorie'] == 'feminine') echo 'selected'; ?>>Féminine</option>
                <option value="masculine" <?php if ($equipe['categorie'] == 'masculine') echo 'selected'; ?>>Masculine</option>
            </select><br>
            <label for="victoire">Victoire:</label>
            <input type="number" name="victoire" value="<?php echo htmlspecialchars($equipe['victoire']); ?>" required><br>
            <label for="medaille">Médaille:</label>
            <input type="number" name="medaille" value="<?php echo htmlspecialchars($equipe['medaille']); ?>" required><br>
            <label for="drapeau">Choisissez un drapeau:</label>
            <input type="file" name="drapeau" id="drapeau" required><br>
            <input type="submit" value="Mettre à jour">
        </form>
    <?php else : ?>
        <p>Équipe non trouvée.</p>
    <?php endif; ?>
</div>

<?php
$content = ob_get_clean();
$titre = "Modifier une équipe";
require "../public/templatecrud.php";
?>
