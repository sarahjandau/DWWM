<?php
require_once "voiture.class.php";


$citroen = new Voiture("Citroen","C3","2015","Noire","130");
$peugeot = new Voiture("Peugeot","306","2003","Bleue","100");
$renault = new Voiture("Renault","Clio2","2012","Grise","50");

$citroen-> affichage();
$citroen->accelerer(100);

?>

