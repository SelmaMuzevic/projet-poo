<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Soigneur
 *
 * @author selma
 */
class Soigneur extends Personnage {
    
    private $bondage = 10;
    
    public function soigner (Personnage $perso):bool {
        if($this->bondage > 0){
            
             $perso->vie+=10;
             
             $this->bondage--;
             
             return true;
        }
          return false;
    }
    
    public function genererStats():string { 
        
  /* 
   * le parent:: permettera de faire appel aux proprietes et 
   * au methodes telles que définie dans la Class Parent.
   * C'est utile si on veut surcharger une methode du parent tout en conservant 
   * le comportement de cette methode, mais juste en lui rajoutant 
   * quelque chose.
   */ 
        
  return parent::genererStats();
    }
}
