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
    
    public function soigner (Personnage $perso){
        
        $perso->vie+=10;
       
    }
}
