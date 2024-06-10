<?php

// $joueur = "Toto";
// $age = 20;
// echo "Nom du joueur : " . $joueur. "\n";
// echo "Age du joueur : " . $age. "\n";

// // $age = $age +1;
// $age++;
// echo "Age du joueur : " . $age;

// //string 
// $a = "Hello world";

// $b = 1;

// //float=double
// $c = 3.14;

// //boolean
// $d = false;

// echo $a . "\n";
// echo $b . "\n";
// echo $c . "\n";
// echo $d . "\n";

// echo gettype($b);

// $operation = 2 + 2 * 5;
// echo $operation;

// define('MACONST', 'Hello');
// echo MACONST;

// const PI = 3.14;

// if(true){
//     define('MACONST', 'Hello');
// }else{
//     define('MACONST', 'Hello World');
// }

// $saisie = readline("Saisir un nombre: ");
// echo $saisie . "\n";

// $saisie =$saisie +5;
// echo $saisie;

// $nmbre= 12;

// // if($age === 10){
// //     echo "Age est égal à 10";
// // }else{
// //     echo "N'est pas égal à 10";
// // }

// if ($nmbre >50){
//     echo "Superieur à 50";
// }elseif($nmbre > 20){
//     echo "Supérieur à 20";
// }elseif($nmbre > 5){
//     echo "Superieur à 5";
// }else{
//     echo "Inferieur à 5";
// }

// echo"**************\n";

// if ($nmbre >50):
//     echo "Superieur à 50";
// elseif($nmbre > 20):
//     echo "Supérieur à 20";
// elseif($nmbre > 5):
//     echo "Superieur à 5";
// else:
//     echo "Inferieur à 5";
// endif;

// $prenom = "Pierre";

// switch($prenom){
//     case "Jean":
//         echo "Bonjour Jean";
//         break;
//     case "Paul":
//         echo "Bonjour Paul";
//         break;
//     case "Pierre":
//         echo "Bonjour Pierre";
//         break;
//     default:
//         echo "Pas de nom";
//         break;
    
// }

// // ***********

// $prenom = "Pierre";

// switch($prenom):
//     case "Jean":
//         echo "Bonjour Jean";
//         break;
//     case "Paul":
//         echo "Bonjour Paul";
//         break;
//     case "Pierre":
//         echo "Bonjour Pierre";
//         break;
//     default:
//         echo "Pas de nom";
//         break;
//     endswitch;

// $prenom = "Paul";

// $resultat = match($prenom){
//     "Jean" => "Bonjour Jean",
//     "Paul" => "Bonjour Paul",
//     default => "Qui êtes-vous?"
// };

// echo $resultat;



// $age =10;  
// $isAllowed;
// if($age > 10){
//     $isAllowed = true;
// }else{
//     $isAllowed = false;
// }

// $isAllowed = $age > 10 ? true : false;   // MANIERE SIMPLIFIE 

// // FUSION NULL

$a = null;
$b = "hello";
$c;

// if($a){
//     $c =$a;
// }elseif($b){
//     $c = $b;
// }else{
//     $c = "Inconnue";
// }

$c = $a ?? $b ?? "Inconnue";

echo $c;

