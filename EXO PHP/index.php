<?php

require "fonction.php";


// echo "Entrez un nombre : ";
// $nombre = readline();

// $carré = $nombre * $nombre ;

// // echo "Le carré de $nombre est : $carré ";


// $prenom = readline("Entrez votre prénom");
// echo "Bonjour $prenom";


// $tauxTVA = 1 + (20/100); 
// $prixHT = 80;
// $nombreArticles = 5;
// $prixTTC = $prixHT * $tauxTVA;


// echo "Le prix HT est de : $prixHT € \n";
// echo "Le nombre d'articles est de : $nombreArticles \n";
// echo "Le taux de TVA associé est de : $tauxTVA % \n";
// echo "Le prix total TTC pour un article est de : $prixTTC € \n";


// $nombre = readline("Entrez un nombre : ");

// if ($nombre > 0) {
//     echo "Le nombre est positif.";
// } elseif ($nombre < 0) {
//     echo "Le nombre est négatif.";
// } else {
//     echo "Le nombre est égal à zéro.";
// }

// $nombre1 = readline("Entrez un premier nombre : ");
// $nombre2 = readline("Entrez un deuxieme nombre : ");

// if ($nombre1 > 0 && $nombre2 > 0) {
//     echo "Le produit des deux nombres est positif.";
// } elseif ($nombre1 < 0 && $nombre2 < 0) {
//     echo "Le produit des deux nombres est positif.";
// } else {
//     echo "Le produit des deux nombres est négatif.";
// }


// $nombre = readline("Entrez un nombre : ");

// if ($nombre > 0) {
//     echo "Le nombre est positif.";
// } elseif ($nombre < 0) {
//     echo "Le nombre est négatif.";
// } else {
//     echo "Le nombre est nul.";
// }


// $nombre1 = readline("Entrez un premier nombre : ");
// $nombre2 = readline("Entrez un deuxieme nombre : ");

// if ($nombre1 == 0 || $nombre2 == 0) {
//     echo "Le produit des deux nombres est nul.";
// } elseif (($nombre1 < 0 && $nombre2 < 0) || ($nombre1 > 0 && $nombre2 > 0)) {
//     echo "Le produit des deux nombres est positif.";
// } else {
//     echo "Le produit des deux nombres est négatif.";
// }

// $age = readline("Age de l'enfant: ");

// if ($age > 5 && $age < 8 ){
//     echo "Poussin";
// } elseif ($age > 7 && $age < 10 ){
//      echo "Pupille";
// } elseif ($age > 9 && $age < 12 ){
//         echo "Minime";
// } elseif ($age > 12 ){
//         echo "Cadet";
// }

// La boucle while - "Tant que..." 

// $i = 5;

// // while($i < 9){
// //     echo $i;
// //     $i++; 
// //     control +C pour arreter la boucle infini
// // 
// }

// EXERCICE 1 

// $nombre = readline();

// while ($nombre < 1 || $nombre > 3){
//     echo "Le numero est valide";
//     $nombre++;
// }

// EXERCICE 2

// $nombre = readline();


// while ($nombre >= 10 && $nombre <= 20){
//     echo "Parfait";
//     break;
// }

// if ($nombre > 20){
//     echo "Plus petit !\n";
// } elseif ($nombre < 10){
//     echo "Plus grand !\n";
// }


// echo "Entrez un nombre de départ : ";
// $nombre_depart = readline();

// $i = 1;

// echo "Les dix nombres suivants sont :\n";
// while ($i <= 10) {
//     echo ($nombre_depart + $i);
//     $i++;
// }


// $nombre = rand(1, 9);

// echo "Table de multiplication pour : $nombre\n\n";

// for ($i = 1; $i <= 10; $i++) {
//     $resultat = $nombre * $i;
//     echo "$nombre x $i = $resultat\n";
// }


// $notes = array(15, 12, 18, 10, 14, 19, 16, 13, 17);
// $somme = 0;

// for ($i = 0; $i < count($notes); $i++) {
//     $somme += $notes[$i];
// }

// echo "La somme des valeurs du tableau est : " . $somme . "\n";



// $tableau1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
// $tableau2 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

// $tableauSomme = array();

// for ($i = 0; $i < count($tableau1); $i++) {
//     $tableauSomme[$i] = $tableau1[$i] + $tableau2[$i];
// }

// echo "Le resultat du tableau est :\n";
// for ($i = 0; $i < count($tableauSomme); $i++) {
//     echo $tableauSomme[$i] . " ";
// }



// $chomage = array(
//     'Autriche' => 4.9,
//     'Allemagne' => 9.3,
//     'Danemark' => 4.8,
//     'Espagne' => 9.4,
//     'France' => 9.7
// );

// foreach ($chomage as $pays => $taux) {
//     echo "Le taux de chômage en " . $pays . " est de " . $taux . "%.\n";
// }


// EXERCICE 1.2

// $chomage = array(
//     'Autriche' => 4.9,
//     'Allemagne' => 9.3,
//     'Danemark' => 4.8,
//     'Espagne' => 9.4,
//     'France' => 9.7
// );


// foreach ($chomage as $pays => $taux) {
//     if ($taux < 5) {
//         echo $pays . "\n";
//     }
// }


// EXERCICE 1.3

// $chomage = array(
//     'Autriche' => 4.9,
//     'Allemagne' => 9.3,
//     'Danemark' => 4.8,
//     'Espagne' => 9.4,
//     'France' => 9.7
// );


// $tauxChomagePlusFaible = min($chomage);

// $nomPaysPlusFaible = array_search($tauxChomagePlusFaible, $chomage);


// echo "Le pays avec le taux de chômage le plus faible est : " . $nomPaysPlusFaible . " ";

// EXERCICE 2

// $tabNotes = array(  
//     'Sarah' =>14, 
//     'Thimothe' =>17,
//     'Boudine' => 12,
//     'Rebecca' => 14,
//     'Wendy' => 2,
//     'Manuela' => 15,
// );

// foreach ($tabNotes as $nom => $note) {
//     echo "Nom : " . $nom . ", Note : " . $note . "\n";
// }

// EXERCICE 2.2

// $tabNotes = array(  
//         'Sarah' =>14, 
//         'Thimothe' =>17,
//         'Boudine' => 12,
//         'Rebecca' => 14,
//         'Wendy' => 4,
//         'Manuela' => 15,
//     );

// $sommeNotes = 0;
// $nombreNotes = count($tabNotes);

// foreach ($tabNotes as $note) {
//     $sommeNotes += $note;
// }

// $moyenneNotes = $sommeNotes / $nombreNotes;

// echo "La moyenne des notes est : " . $moyenneNotes . "\n";


// EXERCICE 3.1

// $tabNotes = array(
//     'Prenot' => array(2, 10, 14),
//     'Perthuis' => array(10, 18, 12),
//     'Martin' => array(12, 14, 16),
    
// );

// echo "Nom des élèves et leurs notes :\n";
// foreach ($tabNotes as $nom => $notes) {
//     echo "Nom : " . $nom . ", Notes : ";
//     foreach ($notes as $note) {
//         echo $note . " ";
//     }
//     echo "\n";
// }


// include 'fonction.php';


// $prixHT = readline("Entrez un prix HT : "); 
// $nombreArticles = readline("Entrez un nombre d'articles : ");
// $tauxTVA = 20; 

// $prixTTC = calculerPrixTTC($prixHT, $nombreArticles, $tauxTVA);

// echo "Le prix TTC est : " . $prixTTC . " euros\n";
// 




// $nbre1 = readline("Choissiez un 1er nombre : ");
// $nbre2 = readline("Choissiez un 2eme nombre : ");

// echo pgcd($nbre1, $nbre2);





// $nombre1 = readline("Entrez le nombre 1: ");
// $nombre2 = readline("Entrez le nombre 2: "); 


// $ppcm = calculerPPCM($nombre1, $nombre2);
// echo "Le PPCM de $nombre1 et $nombre2 est : " . $ppcm . "\n";




// Tableau vide pour pouvoir y mettre des contacts plus tard
$repertoire = [];

// Fonction pour ajouter des contacts
function PushTabl($nom, $numero) {
    global $repertoire;
    array_push($repertoire, [$nom, $numero]);
    echo "**********************************************\n";
    echo "Contact ajouté : $nom, $numero\n \n";
    echo "**********************************************\n";
}

// Fonction pour rechercher un contact
function recherche($nom) {
    global $repertoire;
    foreach ($repertoire as $contact) {
        if ($contact[0] === $nom) {
            return $contact[1];
        }
    }
    return "Contact non trouvé \n";
}

// Fonction pour voir tout les contacts
function toutVoir() {
    global $repertoire;
    if (count($repertoire) === 0) {
        echo "**********************************\n";
        echo "Le répertoire est vide.\n";
        echo "**********************************\n";
    } else {
        foreach ($repertoire as $contact) {
            
            echo "\n".$contact[0] . " " . $contact[1]."\n";
            
        }
    }
}


// Boucle do While pour rentrer au moin 1 fois dans la boucle
do {
$choix1 = 1;
$choix2 = 2;
$choix3 = 3;

echo "Vous souhaitez :\n\n $choix1 : Ajouter un nouveau contact\n $choix2 : Recherchez un contact\n $choix3 : Rechercher Tout contact\n\n";

$choix = readline("Que voulez-vous faire ? ");

// Switch pour traiter le choix que l'utilisateur veux faire
    switch ($choix) {
        case $choix1:
            // Rappel de fonction pour ajouter des contacts
        $nom = readline("Entrez le prénom de la personne : ");
        $numero = readline("Entrez le numéro de téléphone : ");
        PushTabl($nom, $numero);
            break;
    
        case $choix2:
            // Rappel de fonction pour rechercher un contact
        $nomRecherche = readline("Entrez le prénom de la personne à rechercher : ");
        $resultatRecherche = recherche($nomRecherche);
        echo "**********************************************************************\n";
        echo $nomRecherche." a ce numéro : ". $resultatRecherche. "\n";
        echo "**********************************************************************\n";
            break;
    
        case $choix3:
            // Rappel de fonction pour voir tout les contacts
        toutVoir();
            break;
    
        default:
        // Si il fait un choix hors de ceux proposé
            echo "Merci de saisir un choix valide !";
            break;
    }
    // Demande pour continuer ou sortir de la boucle
    $choix = readline("Voulez-vous faire autre chose dans votre menu ? ");
    // Strtolower pour que même si il met en majuscule ca met en minuscule et valide la condition
    $choix = strtolower($choix);
} while ($choix == "oui" || $choix == "yes" || $choix == "y");

// Fin de programme et de la boucle
echo "Merci au revoir";


