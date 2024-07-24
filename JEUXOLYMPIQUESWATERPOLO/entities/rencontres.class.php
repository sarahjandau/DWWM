<?php
require_once dirname(__DIR__). '/dbConnect/MyDbConnection.php';

class Rencontre {
    public static function createRencontre($date, $heure, $categorie, $equipe1, $equipe2, $score1, $score2, $statut) {
        $pdo = MyDbConnection::getInstance()->getPdo();
        
        if (!self::checkEquipeExists($equipe1) || !self::checkEquipeExists($equipe2)) {
            return "Une ou les deux équipes spécifiées n'existent pas.";
        }
        
        $categorie1 = self::getCategorieByEquipeId($equipe1);
        $categorie2 = self::getCategorieByEquipeId($equipe2);

        if ($categorie1 !== $categorie2) {
            return "Les équipes doivent appartenir à la même catégorie.";
        }

        try {
            $stmt = $pdo->prepare('INSERT INTO rencontre (date, heure, categorie, equipe1, equipe2, score1, score2, statut) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
            $stmt->execute([$date, $heure, $categorie1, $equipe1, $equipe2, $score1, $score2, $statut]);
    
            return "Rencontre ajoutée avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public static function deleteRencontre($id_rencontre) {
        $pdo = MyDbConnection::getInstance()->getPdo();
    
        try {
            $stmt = $pdo->prepare('DELETE FROM rencontre WHERE id_rencontre = ?');
            $stmt->execute([$id_rencontre]);
            return "Rencontre supprimée avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public static function updateRencontre($id_rencontre, $date, $heure, $categorie, $equipe1, $equipe2, $score1, $score2, $statut) {
        $pdo = MyDbConnection::getInstance()->getPdo();
        
        if (!self::checkEquipeExists($equipe1) || !self::checkEquipeExists($equipe2)) {
            return "Une ou les deux équipes spécifiées n'existent pas.";
        }
        
        $categorie1 = self::getCategorieByEquipeId($equipe1);
        $categorie2 = self::getCategorieByEquipeId($equipe2);

        if ($categorie1 !== $categorie2) {
            return "Les équipes doivent appartenir à la même catégorie.";
        }

        try {
            $stmt = $pdo->prepare('UPDATE rencontre SET date = ?, heure = ?, categorie = ?, equipe1 = ?, equipe2 = ?, score1 = ?, score2 = ?, statut = ? WHERE id_rencontre = ?');
            $stmt->execute([$date, $heure, $categorie1, $equipe1, $equipe2, $score1, $score2, $statut, $id_rencontre]);
    
            return "Rencontre mise à jour avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public static function getRencontreById($id_rencontre) {
        $pdo = MyDbConnection::getInstance()->getPdo();
        $stmt = $pdo->prepare('SELECT * FROM rencontre WHERE id_rencontre = ?');
        $stmt->execute([$id_rencontre]);
        return $stmt->fetch();
    }

    public static function getAllRencontres() {
        $pdo = MyDbConnection::getInstance()->getPdo();
        $stmt = $pdo->prepare('
            SELECT r.*, e1.pays AS pays1, e1.drapeau_name AS drapeau1, e2.pays AS pays2, e2.drapeau_name AS drapeau2
            FROM rencontre r
            LEFT JOIN equipes e1 ON r.equipe1 = e1.id_equipe
            LEFT JOIN equipes e2 ON r.equipe2 = e2.id_equipe;

        ');
        echo 
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    private static function checkEquipeExists($id_equipe) {
        $pdo = MyDbConnection::getInstance()->getPdo();
        $stmt = $pdo->prepare('SELECT COUNT(*) FROM equipes WHERE id_equipe = ?');
        $stmt->execute([$id_equipe]);
        return $stmt->fetchColumn() > 0;
    }

    private static function getCategorieByEquipeId($id_equipe) {
        $pdo = MyDbConnection::getInstance()->getPdo();
        $stmt = $pdo->prepare('SELECT categorie FROM equipes WHERE id_equipe = ?');
        $stmt->execute([$id_equipe]);
        return $stmt->fetchColumn();
    }
}


?>

