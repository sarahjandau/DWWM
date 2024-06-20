<?php

class Voiture{
    private $marque;
    private $modele;
    private $annee;
    private $couleur;
    public $vitesseActuelle = 0; 

    // Constructeur
    public function __construct($marque, $modele, $annee = null, $couleur = null){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->couleur = $couleur;
    }

    // Getters
    public function getMarque() {return $this->marque;}
    public function getModele() {return $this->modele;}
    public function getAnnee() {return $this->annee;}
    public function getCouleur() {return $this->couleur;}
    public function getVitesseActuelle() {return $this->vitesseActuelle;}

    // Setters
    public function setMarque($marque) {$this->marque = $marque;}
    public function setModele($modele) { $this->modele = $modele;}
    public function setAnnee($annee) {$this->annee = $annee;}
    public function setCouleur($couleur) {$this->couleur = $couleur;}
    public function setVitesseActuelle($vitesseActuelle) {$this->vitesseActuelle = $vitesseActuelle;}

    public function affichage(){
        echo "Marque :  $this->marque " . "<br>";
        echo "Modele :  $this->modele $this->annee " . "<br>";
        // echo "Annee :  $this->annee " . "<br>";
        echo "Couleur :  $this->couleur" . "<br>";

    }

    public function accelerer($valeurs){
        $this->vitesseActuelle += $valeurs;
        echo "Vitesse actuelle : $this->vitesseActuelle";
    }
}