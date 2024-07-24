<?php
ob_start();
require_once dirname(__DIR__). '/entities/Auth.class.php';
require_once dirname(__DIR__). '/dbConnect/MyDbConnection.php';

Auth::startSession();

if (isset($_POST['mail'], $_POST['password'])) {
    $email = $_POST['mail']; 
    $password = $_POST['password'];

    $pdo = MyDbConnection::getInstance()->getPdo();

    try {
        $stmt = $pdo->prepare('SELECT id_user, password FROM user WHERE mail = ?');
        $stmt->execute([$email]); 
        $user = $stmt->fetch();

        
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['id_user'] = $user['id_user'];
            header('Location: ../accueilCrud.php');
            exit();
        } else {
            $error = "Email ou mot de passe incorrect.";
        }
    } catch (PDOException $e) {
        $error = "Erreur lors de la connexion : " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Se connecter</title>
</head>
<body>
    <div class="containerLogin">
        <div class="imageLogin"></div>

        <div class="containerConnexion">
            <div class="logoJO">
                <img src="/public/img/LOGOJO.svg" alt="Logo Paris 2024">
            </div>

            <h2>Connectez-vous</h2>

            <?php if (isset($error)): ?>
                <p class="error"><?php echo htmlspecialchars($error); ?></p>
            <?php endif; ?>
            <form method="POST">
                <label for="mail">Email:</label>
                <input type="email" name="mail" required>
                <label for="password">Mot de passe:</label>
                <input type="password" name="password" required>
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</body>
</html>


