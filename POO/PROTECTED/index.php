<?php 
require_once "Chene.class.php";

$chene = new Chene("Le chêne","arbre","20 mètres","100 ans ", "Fagacées","brun");
$rose = new Rose("La rose","rose","2cm","11 ans ", "Fagacées","rose");


$chene->afficher();
$rose->afficher();