<?php
ob_start();
require_once dirname(__DIR__) . '/entities/Auth.class.php';
require_once dirname(__DIR__) . '/entities/joueurs.class.php';

Auth::verifyAdmin();

if (isset($_POST['idjoueur'])) {
    $idjoueur = $_POST['idjoueur']; 
    $message = Joueur::deleteJoueur($idjoueur);
    echo $message;
}

$joueurs = Joueur::getAllJoueurs();
?>

<form class="form-container" method="POST">
    <label for="idjoueur">Joueur:</label>
    <select name="idjoueur" required> 
        <?php foreach ($joueurs as $joueur) : ?>
            <option value="<?php echo htmlspecialchars($joueur['idjoueur']); ?>">
                <?php echo htmlspecialchars($joueur['prenom'] . ' ' . $joueur['nom']); ?>
            </option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Supprimer">
</form>

<?php
$content = ob_get_clean();
$titre = "Supprimer un joueur";
require "../public/templatecrud.php";
?>
