<?php

class Stagiaire{
    private $nom;
    public $notes;

    // Constructeur
    public function __construct(string $nom, array $notes){
        $this->nom = $nom;
        $this->notes = $notes;
    }

    // Getters
    public function getNom(){
        return $this->nom;
    }

    public function getNotes(){
        return $this->notes;
    }

    // Setters
    public function setNom($nom){
        $this->nom = $nom;
    }

    public function setNotes($notes){
        $this->notes = $notes;
    }

    // Moyenne des notes
    public function calculerMoyenne(){
        if (count($this->notes) === 0){
            return 0;
        }
        $somme = array_sum($this->notes);
        return $somme / count($this->notes);
    }

    // La note maximale
    public function trouverMax(){
        if (count($this->notes) === 0){
            return 0;
        }
        return max($this->notes);
    }

    // La note minimale
    public function trouverMin(){
        if (count($this->notes) === 0){
            return 0;
        }
        return min($this->notes);
    }

    // Affichage
    public function affichage(){
        echo "Nom du stagiaire: " . $this->nom . "<br>";
        echo "Notes du stagiaire: " . implode(", ", $this->notes) . "<br>";
        echo "Moyenne des notes : " . $this->calculerMoyenne() . "<br>";
        echo "Note maximale : " . $this->trouverMax() . "<br>";
        echo "Note minimale : " . $this->trouverMin() . "<br>";
        echo "******************************* <br>";
    }
}
?>
