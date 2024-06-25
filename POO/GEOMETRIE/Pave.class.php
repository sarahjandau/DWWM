<?php
require_once "Rectangle.class.php";

class Pave extends Rectangle{

    protected $hauteur;

    public function __construct($longueur, $largeur, $hauteur){
        parent::__construct($longueur, $largeur);
        $this->hauteur = $hauteur;

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

     // getter hauteur 
     public function getHauteur(){
        return $this->hauteur;
    }

    // Setter hauteur 
    public function setHauteur($hauteur){
        $this->hauteur = $hauteur;
    }

    public function perimetrePave(){
        return (2* Rectangle::perimetreRectangle()) + (4* $this->hauteur) ; 
    }

    public function volumePave(){
        return Rectangle::aire() * $this->hauteur ; 
    }

    public function AfficherPave(){
        echo "Périmètre du pavé: {$this->perimetrePave()} <br>";
        echo "Volume du pavé: {$this->volumePave()} <br>";
        echo "***********************************************************<br>";

    }
}
