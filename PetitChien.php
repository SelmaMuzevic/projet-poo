<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PetitChien
 *
 * @author selma
 */
class PetitChien {
    public $nom;
    public $race;
    public $dateNaissance;
    public $couleur;

    public function aboyer(){
       echo 'wouf wouf wouf'; 
    }
    public function __toString() {
        return ' mon nom est ' .$this->nom. 
                ', Je suis un ' .$this->race. 
                ', Je suis nee le ' .$this->dateNaissance. 
                ', ma couleur est ' .$this->couleur;
    }
    public function __construct($nom,$race,$date,$couleur) {
        
        $this->nom = $nom;
        $this->race = $race;
        $this->dateNaissance = $date;
        $this->couleur = $couleur; 
    }

}