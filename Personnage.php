<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personnage
 *
 * @author selma
 */
class Personnage {
    private $nom;
    private $vie;
    private $force;
    private $defence;
    
    function __construct(string $nom, 
                           int $vie, 
                           int $force, 
                           int $defence){
        $this->nom = $nom;
        $this->vie = $vie;
        $this->force = $force;
        $this->defence = $defence;

    }
     public function defendre(){
        $this->defence+=20;
      }
      
    public function attaquer(Personnage $cible){
        
        $degats = $this->force-$cible->defence;
        $cible->vie -= $degats;
        
    }
    
    public function genererHTML():string {
        
        return    '<p>nom:'.$this->nom.'</p>' 
                . '<p>vie:'.$this->vie.'</p>' 
                . '<p>force:'.$this->force.'</p>' 
                . '<p>defence:'.$this->defence.'</p>' 
                . '</br>';
        
   } 
}
