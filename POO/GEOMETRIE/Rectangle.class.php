<?php
require_once "Pave.class.php";

class Rectangle{
    protected $longueur;
    protected $largeur;

    public function __construct(int $longueur, int $largeur){
        $this-> longueur = $longueur;
        $this-> largeur = $largeur;
    }

    // getter longueur 
    public function getLongueur(){
        return $this->longueur;
    }


    // Setter longueur 
    public function setLongueur($longueur){
        $this->longueur = $longueur;
    }

    // getter largeur 
    public function getLargeur(){
        return $this->largeur;
    }

    // Setter largeur 
    public function setLargeur($largeur){
        $this->largeur = $largeur;
    }


    public function PerimetreRectangle(){
        return 2*($this->longueur + $this->largeur);
    }

    public function Aire(){
        return $this->longueur * $this->largeur;

    }

    public function EstCarre(){
        if($this->longueur == $this->largeur){
            echo "C'est un carré ! ";
        }else{
            echo "Ce n'est pas un carré.";
        }  
    }

    public function AfficherRectangle(){
        echo "Longueur :  $this->longueur " . "<br>";
        echo "Largeur :  $this->largeur" . "<br>";
        echo "Périmètre du rectangle : {$this->PerimetreRectangle()} <br>";
        echo "Aire du rectangle : {$this->Aire($this->longueur, $this->largeur)} <br>";
        echo "Carré : {$this->EstCarre($this->longueur, $this->largeur)} <br>";
        echo "***********************************************************<br>";

    }

    
}