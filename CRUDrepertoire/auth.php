<?php
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

require_once "dbConnect.php";

function estAdmin($userId){
    $pdo = getPDOConnexion();
    // preparation de la requete SQL 
    $stmt = $pdo->prepare('SELECT role  FROM UserRoles WHERE user_id = ?');
    // execution de la requête
    $stmt->execute([$userId]);
    // récuperation du résultat
    $userRole = $stmt->fetch();


    // vérification du rôle
    return$userRole && $userRole['role'] === 'admin';
}

function verifAdmin(){
    if(!isset($_SESSION['user_id'])){
        echo "Session utilisateur non défini";
        exit();
    }else{
        $userId = $_SESSION['user_id'];
        if(!estAdmin($userId)){
            echo "L'utilisateur avec l'ID $userId n'est pas un administrateur";
            exit();
        }
    }
}

