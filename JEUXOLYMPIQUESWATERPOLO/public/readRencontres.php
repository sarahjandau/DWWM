<?php
ob_start();
require_once dirname(__DIR__) . '/entities/Auth.class.php';
require_once dirname(__DIR__) . '/entities/rencontres.class.php';

Auth::verifyAdmin();

$rencontres = Rencontre::getAllRencontres();
?>
<br>
<br>
<a href="../public/createRencontre.php"> Ajouter une rencontre </a>

<table border="1">
    <tr>
        <th>Date</th>
        <th>Heure</th>
        <th>Catégorie</th>
        <th>Équipe 1</th>
        <th>Drapeau Équipe 1</th>
        <th>Équipe 2</th>
        <th>Drapeau Équipe 2</th>
        <th>Score 1</th>
        <th>Score 2</th>
        <th>Statut</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($rencontres as $rencontre): ?>
    <tr>
        <td><?php echo htmlspecialchars($rencontre['date'] ?? ''); ?></td>
        <td><?php echo htmlspecialchars($rencontre['heure'] ?? ''); ?></td>
        <td><?php echo htmlspecialchars($rencontre['categorie'] ?? ''); ?></td>
        <td><?php echo htmlspecialchars($rencontre['equipe1'] ?? ''); ?></td>
        <td><img src="../public/img/<?php echo htmlspecialchars($rencontre['drapeau1'] ?? ''); ?>" alt="drapeau1" style="width:50px;height:30px;"></td>
        <td><?php echo htmlspecialchars($rencontre['equipe2'] ?? ''); ?></td>
        <td><img src="../public/img/<?php echo htmlspecialchars($rencontre['drapeau2'] ?? ''); ?>" alt="drapeau2" style="width:50px;height:30px;"></td>
        <td><?php echo htmlspecialchars($rencontre['score1'] ?? ''); ?></td>
        <td><?php echo htmlspecialchars($rencontre['score2'] ?? ''); ?></td>
        <td><?php echo htmlspecialchars($rencontre['statut'] ?? ''); ?></td>
        <td>
            <a href="../public/updateRencontre.php?id_rencontre=<?php echo htmlspecialchars($rencontre['id_rencontre'] ?? ''); ?>">✏️</a>
            <a href="../public/deleteRencontre.php?id=<?php echo htmlspecialchars($rencontre['id_rencontre'] ?? ''); ?>">🗑️</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php
$content = ob_get_clean();
$titre = "Voir les rencontres";
require "../public/templatecrud.php";
?>



