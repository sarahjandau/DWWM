<?php
require "fonctions.php";
ob_start(); 
$results = ""; 

if(isset($_POST['nombre1'], $_POST['nombre2'], $_POST['operation'])){
    $nombre1 = $_POST['nombre1'];
    $nombre2 = $_POST['nombre2'];
    $choix = $_POST['operation'];


    if(verifierSaisie($nombre1) && verifierSaisie($nombre2)){
        $results = operation($choix, $nombre1, $nombre2);
    }else{
        $results = "<p> Veuillez entrer un nombre valide </p>";
    }
} 

$content = ob_get_clean(); 
$titre = "Résultat de l'opération";
require "template.php";

?>