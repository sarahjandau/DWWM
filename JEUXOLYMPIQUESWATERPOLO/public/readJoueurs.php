<?php
ob_start();
require_once dirname(__DIR__). '/entities/Auth.class.php';
require_once dirname(__DIR__). '/entities/joueurs.class.php';

Auth::verifyAdmin();

$joueur = Joueur::getAllJoueurs();
?>
<br>
<br>
<a href="../public/createJoueur.php"> Ajouter un joueur </a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Photo</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Age</th>
        <th>Poste occupé </th>
        <th> Id Equipe </th>
        <th>Actions</th>
    </tr>
    <?php foreach ($joueur as $joueur): ?>
    <tr>
        <td><?php echo htmlspecialchars($joueur['idjoueur']); ?></td>
        <td> <img src="img/<?= htmlspecialchars($joueur['image_name']); ?>" alt="avatar"> </td>
        <td><?php echo htmlspecialchars($joueur['nom']); ?></td>
        <td><?php echo htmlspecialchars($joueur['prenom']); ?></td>
        <td><?php echo htmlspecialchars($joueur['age']); ?></td>
        <td><?php echo htmlspecialchars($joueur['posteoccupe']); ?></td>
        <td><?php echo htmlspecialchars($joueur['id_equipe']); ?></td>
        <td><a href="../public/updateJoueur.php?idjoueur=<?php echo htmlspecialchars($joueur['idjoueur']); ?>">✏️</a> 
        <a href="../public/deleteJoueur.php?id=<?php echo htmlspecialchars($joueur['idjoueur']); ?>">🗑️ </a></td>
        

    </tr>
    <?php endforeach; ?>
</table>

<?php
$content = ob_get_clean();
$titre = "Voir les joueurs";
require "../public/templatecrud.php";
?>