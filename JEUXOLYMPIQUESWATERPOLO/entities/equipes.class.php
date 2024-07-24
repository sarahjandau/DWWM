<?php
require_once dirname(__DIR__). '/dbConnect/MyDbConnection.php';

class Equipe {
    public static function createEquipe($drapeau, $pays, $categorie, $victoire, $medaille, $id_rencontre) {
        $pdo = MyDbConnection::getInstance()->getPdo();
        
        $drapeau_name = $drapeau['name'];
    
        $target_dir = __DIR__ . "/../public/img/";
        $target_file = $target_dir . basename($drapeau["name"]);
        if (!move_uploaded_file($drapeau["tmp_name"], $target_file)) {
            return "Erreur lors du téléchargement de l'image.";
        }
    
        $stmt = $pdo->prepare('SELECT COUNT(*) FROM rencontre WHERE id_rencontre = ?');
        $stmt->execute([$id_rencontre]);
        $count = $stmt->fetchColumn();
    
        if ($count == 0) {
            return "L'ID rencontre spécifié n'existe pas.";
        }
    
        try {
            $stmt = $pdo->prepare('INSERT INTO equipes (drapeau_name, pays, categorie, victoire, medaille, id_rencontre) VALUES (?, ?, ?, ?, ?, ?)');
            $stmt->execute([basename($drapeau["name"]), $pays, $categorie, $victoire, $medaille, $id_rencontre]);
    
            return "Equipe ajoutée avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }
    
    
    public static function deleteEquipe($id_equipe) {
        $pdo = MyDbConnection::getInstance()->getPdo();
    
        try {
            $stmt = $pdo->prepare('DELETE FROM equipes WHERE id_equipe = ?');
            $stmt->execute([$id_equipe]);
            return "Équipe supprimée avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public static function updateEquipe($drapeau, $pays, $categorie, $victoire, $medaille, $id_equipe) {
        $pdo = MyDbConnection::getInstance()->getPdo();
    
        $drapeau_name = $drapeau['name'];
    
        $target_dir = __DIR__ . "/../public/img/";
        $target_file = $target_dir . basename($drapeau["name"]);
        if (!move_uploaded_file($drapeau["tmp_name"], $target_file)) {
            return "Erreur lors du téléchargement de l'image.";
        }
    
        try {
            $stmt = $pdo->prepare('UPDATE equipes SET drapeau_name = ?, pays = ?, categorie = ?, victoire = ?, medaille = ? WHERE id_equipe = ?');
            $stmt->execute([$drapeau_name, $pays, $categorie, $victoire, $medaille, $id_equipe]);
    
            return "Equipe mise à jour avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }
    

    public static function getEquipeById($id) {
        $pdo = MyDbConnection::getInstance()->getPdo();
        $stmt = $pdo->prepare('SELECT * FROM equipes WHERE id_equipe = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public static function getAllEquipes() {
        $pdo = MyDbConnection::getInstance()->getPdo();
        $stmt = $pdo->prepare('SELECT * FROM equipes');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>


