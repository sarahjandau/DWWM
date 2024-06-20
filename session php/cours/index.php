<?php

// je demarre une session 
session_start();

// stocker des infos dans la session
$_SESSION['username'] = 'toto';
$_SESSION['mail'] = 'toto@gmail.com';

// Accéder aux informations
echo "username : " . $_SESSION['username'] . "<br>";
echo "mail : " . $_SESSION['mail'];

// je vérifie si la session est active 

if(isset($_SESSION['username'])){
    echo "L'utilisateur est connecté : " . $_SESSION['username'];
}else{
    echo "L'utilisateur n'est pas connecté";
}

// Pour supprimer une variable de session
unset($_SESSION['username']);

// detruire la session 

$_SESSION = array();

//détruire le cookie de session 
if(ini_get("session.use_cookies")){
    $params = session_get_cookie_params();
    setcookie(session_name(), '',time() -42000,
    $params['path'], $params['domain'],
    $params['secure'], $params['httponly']
    
);
}
session_destroy();

?>