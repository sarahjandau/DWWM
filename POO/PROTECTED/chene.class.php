<?php
require_once "index.php";
require_once "plante.class.php";

class Chene extends Plante{
    protected $couleur;

    public function __construct($nom, $type, $hauteur, $dureeDeVie, $famille, $couleur){
        parent::__construct($nom, $type, $hauteur, $dureeDeVie, $famille);
        $this->couleur = $couleur;
    }
    
    function afficher(){
        echo "Nom : $this->nom . <br>";
        echo "Type : $this->type . <br>";
        echo "Hauteur du chêne : $this->hauteur . <br>";
        echo "Durée de vie : $this->dureeDeVie . <br>";
        echo "Famille : $this->famille . <br>";
        echo "Couleur : $this->couleur . <br> ";

    }

}



