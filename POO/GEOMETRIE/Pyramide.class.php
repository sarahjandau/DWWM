<?php
require_once "Rectangle.class.php";

class Pyramide extends TriangleRectangle{

    public function __construct($base, $hauteur){
        parent::__construct($base, $hauteur);

    }

    // // getter longueur 
    // public function getLongueur(){
    //     return $this->longueur;
    // }


    // // Setter longueur 
    // public function setLongueur($longueur){
    //     $this->longueur = $longueur;
    // }

    // // getter largeur 
    // public function getLargeur(){
    //     return $this->largeur;
    // }

    // // Setter largeur 
    // public function setLargeur($largeur){
    //     $this->largeur = $largeur;
    // }

    //  // getter hauteur 
    //  public function getHauteur(){
    //     return $this->hauteur;
    // }

    // // Setter hauteur 
    // public function setHauteur($hauteur){
    //     $this->hauteur = $hauteur;
    // }

    // public function perimetrePyramide(){
       
    // }

    public function volumePyramide(){
        return (1/3)*(TriangleRectangle::AireTriangleRectangle() * $this->hauteur) ;
        
    }

    public function AfficherPyramide(){
        // echo "Périmètre de la pyramide: {$this->perimetrePyramide()} <br>";
        echo "Volume de la pyramide: {$this->volumePyramide()} <br>";
        echo "***********************************************************<br>";

    }
}
