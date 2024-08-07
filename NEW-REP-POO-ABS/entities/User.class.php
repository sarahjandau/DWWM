<?php


require_once dirname(__DIR__). '/dbConnect/MyDbConnection.php';

class User{
    public static function createUser($nom, $prenom, $email, $telephone, $password, $role, $image) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $pdo = MyDbConnection::getInstance(); 

        $image_name = $image['name'];

        $target_dir = __DIR__ . "/../public/img/";
        $target_file = $target_dir . basename($image["name"]);
        if (!move_uploaded_file($image["tmp_name"], $target_file)) {
            return "Erreur lors du téléchargement de l'image.";
        }


        try {
            $stmt = $pdo->prepare('INSERT INTO users (nom, prenom, email, telephone, pwd, image_name) VALUES (?, ?, ?, ?, ?, ?)');
            $stmt->execute([$nom, $prenom, $email, $telephone, $hashedPassword, $image_name]);

            $userId = $pdo->lastInsertId();

            $stmt = $pdo->prepare('INSERT INTO UserRoles (user_id, role) VALUES (?, ?)');
            $stmt->execute([$userId, $role]);

            return "Utilisateur ajouté avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public static function deleteUser($id) {
        $pdo = MyDbConnection::getInstance(); 

        try {
            $stmt = $pdo->prepare('DELETE FROM Users WHERE id = ?');
            $stmt->execute([$id]);
            return "Utilisateur supprimé avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public static function updateUser($id, $nom, $prenom, $email, $telephone, $role, $image) {
        $pdo = MyDbConnection::getInstance(); 

        $image_name = $image['name'];

        $target_dir = __DIR__ . "/../public/img/";
        $target_file = $target_dir . basename($image["name"]);
        if (!move_uploaded_file($image["tmp_name"], $target_file)) {
            return "Erreur lors du téléchargement de l'image.";
        }

        try {
            $stmt = $pdo->prepare('UPDATE Users SET nom = ?, prenom = ?, email = ?, telephone = ?, image_name = ? WHERE id = ?');
            $stmt->execute([$nom, $prenom, $email, $telephone, $image_name, $id]);

            $stmt = $pdo->prepare('UPDATE UserRoles SET role = ? WHERE user_id = ?');
            $stmt->execute([$role, $id]);

            return "Utilisateur mis à jour avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public static function getUserById($id) {
        $pdo = MyDbConnection::getInstance(); 
        $stmt = $pdo->prepare('SELECT users.*, userroles.role FROM users JOIN userroles ON users.id = userroles.user_id WHERE users.id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public static function getAllUsers() {
        $pdo = MyDbConnection::getInstance(); 
        $stmt = $pdo->prepare('SELECT * FROM users');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getAllUsersWithRoles() {
        $pdo = MyDbConnection::getInstance(); 
        $stmt = $pdo->prepare('SELECT users.*, userroles.role FROM users JOIN userroles ON users.id = userroles.user_id');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
