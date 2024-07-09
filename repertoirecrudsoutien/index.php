<?php
ob_start();

if(session_status() == PHP_SESSION_NONE){
    session_start();
}

?>

<div class="welcome-text">
    <h2>Bienvenue sur la page d'accueil du CRUD utilisateur </h2>
    <p> Utilisez le menu ci-dessous pour naviguer entre les differentes actions CRUD. </p>
</div>



<?php
$content = ob_get_clean();
$titre = "Accueil";
require "template.php";
?>