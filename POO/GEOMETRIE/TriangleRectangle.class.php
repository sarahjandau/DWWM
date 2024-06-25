<?php
require_once "Pyramide.class.php";

class TriangleRectangle{
    protected $base;
    protected $hauteur;

    public function __construct($hauteur,$base){
        $this-> hauteur = $hauteur;
        $this-> base = $base;
    }

     // getter hauteur 
     public function getHauteur(){
        return $this->hauteur;
    }

    // Setter hauteur 
    public function setHauteur($hauteur){
        $this->hauteur = $hauteur;
    }

     // getter base 
     public function getBase(){
        return $this->base;
    }

    // Setter hauteur 
    public function setBase($base){
        $this->base = $base;
    }


    public function PerimetreTriangleRectangle(){
        $hypothenuse = sqrt((pow($this->base,2)+ pow($this->hauteur,2)));
        return $this->base + $this->hauteur + $hypothenuse;
    }

    public function AireTriangleRectangle(){
        return ($this->base * $this->hauteur) /2;

    }


    public function AfficherTriangleRectangle(){
        echo "Base :  $this->base " . "<br>";
        echo "Hauteur :  $this->hauteur" . "<br>";
        echo "Périmètre du triangle rectangle : {$this->PerimetreTriangleRectangle()} <br>";
        echo "Aire du triangle rectangle : {$this->AireTriangleRectangle()} <br>";
        echo "***********************************************************<br>";

    }

    
}