<?php

class Stagiaire{
    private $nom;
    public $notes;

    // Constructeur
    public function __construct(string $nom, array $notes) {
        $this->nom = $nom;
        $this->notes = $notes;
    }

    // Getters
    public function getNom() {return $this->nom;}
    public function getNotes() {return $this->notes;}
    

    // Setters
    public function setNom($nom) {$this->nom = $nom;}
    public function setNotes($notes) { $this->notes = $notes;}

    public function calculerMoyenne(){
        

    }


}