<?php


// function calculerPrixTTC($prixHT, $nombreArticles, $tauxTVA) {
    
//     $totalHT = $prixHT * $nombreArticles;
//     $montantTVA = $totalHT * ($tauxTVA / 100);
//     $totalTTC = $totalHT + $montantTVA;
    
//     return $totalTTC;
// }




// function pgcd($nbre, $nbre2){
//     while ($nbre2 != 0){
//         $nbre3 = $nbre2;
//         $nbre2 = $nbre % $nbre2;
//         $nbre = $nbre3;
//     }
//     return $nbre;
// }



// function calculerPGCD($a, $b) {
//     while ($b != 0) {
//         $temp = $b;
//         $b = $a % $b;
//         $a = $temp;
//     }
//     return $a;
// }

// function calculerPPCM($a, $b) {
//     $pgcd = calculerPGCD($a, $b);
//     return abs($a * $b) / $pgcd;
// }

function ajouterContact (&$repertoiretelephonique, $nom, $prenom, $numero, $mail){
    array_push($repertoiretelephonique, 
        ["nom" => $nom,
        "prenom" => $prenom,
        "numero" => $numero,
        "mail" => $mail]
    );
    }

function afficherContact($repertoiretelephonique){
    foreach ($repertoiretelephonique as $contacts){
       foreach($contacts as $key => $value){
        echo $key . " : " . $value . " \n";
       }
    }

    
    
}
