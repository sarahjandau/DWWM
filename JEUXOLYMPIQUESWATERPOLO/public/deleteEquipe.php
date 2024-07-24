<?php
ob_start();
require_once dirname(__DIR__) . '/entities/Auth.class.php';
require_once dirname(__DIR__) . '/entities/equipes.class.php';

Auth::verifyAdmin();

if (isset($_POST['id_equipe'])) {
    $id_equipe = $_POST['id_equipe']; 
    $message = Equipe::deleteEquipe($id_equipe);
    echo $message;
}

// Récupérer toutes les équipes pour afficher dans le formulaire
$equipes = Equipe::getAllEquipes();
?>

<form class="form-container" method="POST">
    <label for="id_equipe">Équipe</label>
    <select name="id_equipe" required> 
        <?php foreach ($equipes as $equipe) : ?>
            <option value="<?php echo htmlspecialchars($equipe['id_equipe']); ?>">
                <?php echo htmlspecialchars($equipe['pays'] . ' ' . $equipe['categorie']); ?>
            </option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Supprimer">
</form>

<?php
$content = ob_get_clean();
$titre = "Supprimer une équipe";
require "../public/templatecrud.php";
?>
