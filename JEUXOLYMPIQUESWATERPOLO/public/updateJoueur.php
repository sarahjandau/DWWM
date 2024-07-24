<?php
ob_start();
require_once dirname(__DIR__) . '/entities/Auth.class.php';
require_once dirname(__DIR__) . '/entities/joueurs.class.php';

Auth::verifyAdmin();

$joueur = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['idjoueur'], $_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['posteoccupe'], $_POST['id_equipe']) && isset($_FILES['image'])) {
        $idjoueur = $_POST['idjoueur'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];
        $posteoccupe = $_POST['posteoccupe'];
        $id_equipe = $_POST['id_equipe'];
        $image = $_FILES['image'];

        $message = Joueur::updatejoueur($idjoueur, $nom, $prenom, $age, $posteoccupe, $image);
        echo $message;

        $joueur = Joueur::getJoueurById($idjoueur);
    } else {
        echo "Tous les champs doivent être remplis.";
    }
} elseif (isset($_GET['idjoueur'])) {
    $joueur = Joueur::getJoueurById($_GET['idjoueur']);

    if (!$joueur) {
        echo "Joueur non trouvé.";
        exit();
    }
} else {
    echo "Aucun ID de joueur fourni.";
    exit();
}
?>

<div class="form-container">
    <?php if ($joueur) : ?>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="idjoueur" value="<?php echo htmlspecialchars($joueur['idjoueur']); ?>">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" value="<?php echo htmlspecialchars($joueur['nom']); ?>" required><br>
            <label for="prenom">Prénom:</label>
            <input type="text" name="prenom" value="<?php echo htmlspecialchars($joueur['prenom']); ?>" required><br>
            <label for="age">Age:</label>
            <input type="number" name="age" value="<?php echo htmlspecialchars($joueur['age']); ?>" required><br>
            <label for="posteoccupe">Poste occupé:</label>
            <select name="posteoccupe" required>
                <option value="Attaquant" <?php if ($joueur['posteoccupe'] == 'Attaquant') echo 'selected'; ?>>Attaquant</option>
                <option value="Defenseur" <?php if ($joueur['posteoccupe'] == 'Defenseur') echo 'selected'; ?>>Défenseur</option>
                <option value="Gardien de but" <?php if ($joueur['posteoccupe'] == 'Gardien de but') echo 'selected'; ?>>Gardien</option>
            </select><br>
            <label for="id_equipe">Id Equipe:</label>
            <input type="number" name="id_equipe" value="<?php echo htmlspecialchars($joueur['id_equipe']); ?>" required><br>
            <label for="image">Choisissez une image:</label>
            <input type="file" name="image" id="image" required><br>
            <input type="submit" value="Mettre à jour">
        </form>
    <?php else : ?>
        <p>Joueur non trouvé.</p>
    <?php endif; ?>
</div>

<?php
$content = ob_get_clean();
$titre = "Modifier un joueur";
require "../public/templatecrud.php";
?>
