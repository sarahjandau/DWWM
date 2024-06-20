<?php

// if(isset($_POST['phrase'])){
//     $phrase = $_POST['phrase'];
//     $majuscule = "/[A-Z]/";

//     if(preg_match($majuscule,$phrase)){
//         echo "La phrase contient des majuscules";
//     }else{
//         echo "Ne contient de majuscules";
//     } 
// }else{
//     echo "Veuillez soumettre le formulaire";
// }


if(isset($_POST['mdp'])){
    $mdp = $_POST['mdp'];
    $conditions = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";


    if(preg_match($mdp,$conditions)){
        echo "Le mot de passe est correct";
    }else{
        echo "Le mot de passe est incorrect";
    } 
}else{
    echo "Veuillez soumettre le formulaire";
}

