<?php
ob_start();
?>

<p>Naviguez à travers les différentes catégories pour ajouter, supprimer ou modifier.</h2>




<?php
$content = ob_get_clean();
$titre = "Bienvenue dans votre tableau de bord";
require "templatecrud.php";
?>