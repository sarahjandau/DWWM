<?php
require_once dirname(__DIR__). '/dbConnect/MyDbConnection.php';

class Joueur{
    public static function createJoueur($nom, $prenom, $age, $posteoccupe, $id_equipe, $image) {
        $pdo = MyDbConnection::getInstance()->getPdo(); 

        $image_name = $image['name'];

        $target_dir = __DIR__ . "/../public/img/";
        $target_file = $target_dir . basename($image["name"]);
        if (!move_uploaded_file($image["tmp_name"], $target_file)) {
            return "Erreur lors du téléchargement de l'image.";
        }

        try {
            $stmt = $pdo->prepare('INSERT INTO joueur (nom, prenom, age, posteoccupe, image_name, id_equipe) VALUES (?, ?, ?, ?, ?, ?)');
            $stmt->execute([$nom, $prenom, $age, $posteoccupe, $image_name, $id_equipe]);

            return "Joueur ajouté avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public static function deleteJoueur($idjoueur) {
        $pdo = MyDbConnection::getInstance()->getPdo(); 

        try {
            $stmt = $pdo->prepare('DELETE FROM joueur WHERE idjoueur = ?');
            $stmt->execute([$idjoueur]);
            return "Joueur supprimé avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public static function updatejoueur($idjoueur, $nom, $prenom, $age, $posteoccupe, $image) {
        $pdo = MyDbConnection::getInstance()->getPdo();

        $image_name = $image['name'];

        $target_dir = __DIR__ . "/../public/img/";
        $target_file = $target_dir . basename($image["name"]);
        if (!move_uploaded_file($image["tmp_name"], $target_file)) {
            return "Erreur lors du téléchargement de l'image.";
        }
    
        try {
            $stmt = $pdo->prepare('UPDATE joueur SET nom = ?, prenom = ?, age = ?, posteoccupe = ?, image_name = ? WHERE idjoueur = ?');
            $stmt->execute([$nom, $prenom, $age, $posteoccupe, $image_name, $idjoueur]);
    
            return "Joueur mis à jour avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }   

    public static function getJoueurById($id){
        $pdo = MyDbConnection::getInstance()->getPdo(); 
        $stmt = $pdo->prepare('SELECT * FROM joueur WHERE idjoueur = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public static function getAllJoueurs() {
        $pdo = MyDbConnection::getInstance()->getPdo(); 
        $stmt = $pdo->prepare('SELECT * FROM joueur');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getAllWithRoles() {
        $pdo = MyDbConnection::getInstance()->getPdo(); 
        $stmt = $pdo->prepare('SELECT * FROM user');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>

