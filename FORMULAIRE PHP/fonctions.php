<?php

//exercice 1 : Calcul sur le cercle

//Vérification de la saisie
function verifierSaisie($valeur){
    if(!is_numeric($valeur) || $valeur <=0){
        echo "Nombre invalide, recommencez : \n";
        return false;
    }
    return true;
}

//Fonction calcul sur le cercle
function calculerCercle($rayon){

    //La circonférence
    $circonference = 2 * M_PI * $rayon;

    // La surface
    $surface = M_PI *pow($rayon, 2);

    return [
        'circonference' =>round($circonference,2),
        'surface' => round($surface,2)
    ];

}

//Fonction pour demander un nombre à l'utilisateur
function demanderNombre($message){
    $nbreValide = false;
    while(!$nbreValide){
        echo $message;
        $saisie =readline();
        $nbreValide = verifierSaisie($saisie);
    }
    return $saisie;
}

//Fonction pour afficher le menu et obtenir le chois de l'utilisateur

function afficherMenu(){
    echo "\n";
    echo "-----------------------------------------\n";
    echo "Menu :\n";
    echo "1. Addition\n";
    echo "2. soustraction\n";
    echo "3. Multiplication\n";
    echo "4. Division\n";
    $choix = readline("entrez le numéro de l'opération que vous voulez effectuer :\n");
    echo "-----------------------------------------\n";
    return $choix;

}

//fonction pour effectuer l'opération choisie par l'utilisateur

function operation($choix,$nombre1,$nombre2){

    switch($choix){
        case 1: 
            $resultat = $nombre1 + $nombre2;
            return "Le résultat de l'adition est : $resultat\n";
            break;
        
        case 2: 
            $resultat = $nombre1 - $nombre2;
            return "Le résultat de la soustraction est : $resultat\n";
            break;
        
        case 3:
            $resultat = $nombre1 * $nombre2;
            return "Le résultat de la multiplication est : $resultat\n";
            break;
        
        case 4:

            //Vérification du deuxième nombre
            if($nombre2 != 0){
                $resultat = $nombre1 / $nombre2;
                return "Le résultat de la division est : $resultat\n";
            }else{
                return "erreur : division par zéro \n";
            }
            break;
        default:
        return "Choix invalide\n";

    }

}

//Fonction pour demander à l'utilisateur s'il veut continuer ou quitter

function continuer(){
    $reponse = readline("Voulez-vous effectuer une autre opération ? (o/n) :");
    return strtolower($reponse) == "o";
}

echo "*********************************************\n";