import React from 'react';

function Personne(props){
    return(
        <div>
            <h1>Nom : {props.nom}</h1>
            {/* new Date() crée un objet Date */}
            {/* '-' Sustrait l'age a l'année actuelle */}
            {/* getFullYear() retourne l'année actuelle */}
            <div>Age : {props.age} | Année(s) : {new Date().getFullYear() - props.age}</div>
            <div>Sexe : {props.sexe}</div>
        </div>
    )
}



export default Personne;