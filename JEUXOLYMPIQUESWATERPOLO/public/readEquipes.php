<?php
ob_start();
require_once dirname(__DIR__). '/entities/Auth.class.php';
require_once dirname(__DIR__). '/entities/equipes.class.php';

Auth::verifyAdmin();

$equipe = Equipe::getAllEquipes();
?>
<br>
<br>
<a href="../public/createEquipe.php"> Ajouter une équipe </a>


<table border="1">
    <tr>
        <th>ID équipe</th>
        <th>Drapeau</th>
        <th>Pays</th>
        <th>Categorie</th>
        <th>Victoire</th>
        <th>Médaille</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($equipe as $equipe): ?>
    <tr>
        <td><?php echo htmlspecialchars($equipe['id_equipe']); ?></td>
        <td> <img src="../public/img/<?php echo htmlspecialchars($equipe['drapeau_name']); ?>" alt="drapeau" style="width:50px;height:30px;"> </td>      
        <td><?php echo htmlspecialchars($equipe['pays']); ?></td>
        <td><?php echo htmlspecialchars($equipe['categorie']); ?></td>
        <td><?php echo htmlspecialchars($equipe['victoire']); ?></td>
        <td><?php echo htmlspecialchars($equipe['medaille']); ?></td>
        <td><a href="../public/updateEquipe.php?id_equipe=<?php echo htmlspecialchars($equipe['id_equipe']); ?>">✏️</a> 
        <a href="../public/deleteEquipe.php?id=<?php echo htmlspecialchars($equipe['id_equipe']); ?>">🗑️</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php
$content = ob_get_clean();
$titre = "Voir les équipes";
require "../public/templatecrud.php";
?>
