<?php
ob_start();
require_once dirname(__DIR__). '/entities/Auth.class.php';
require_once dirname(__DIR__). '/entities/User.class.php';

Auth::verifyAdmin();

$users = User::getAllUsersWithRoles();
?>
<br>
<br>
<a href="../public/createUser.php"> Ajouter un utilisateur </a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Rôle</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo htmlspecialchars($user['id_user']); ?></td>
        <td><?php echo htmlspecialchars($user['nom']); ?></td>
        <td><?php echo htmlspecialchars($user['prenom']); ?></td>
        <td><?php echo htmlspecialchars($user['mail']); ?></td>
        <td><?php echo htmlspecialchars($user['role']); ?></td>
        <td><a href="../public/updateUser.php?id_user=<?php echo htmlspecialchars($user['id_user']); ?>">✏️</a> 
        <a href="../public/deleteUser.php?id=<?php echo htmlspecialchars($user['id_user']); ?>">🗑️</a></td>
        

    </tr>
    <?php endforeach; ?>
</table>

<?php
$content = ob_get_clean();
$titre = "Voir les utilisateurs";
require "../public/templatecrud.php";
?>