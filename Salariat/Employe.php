<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../Person.php';
/**
 * Description of Employe
 *
 * @author selma
 */
class Employe extends Person {
    
    private $DateArivee;
    private $salaire;
    
    public function __construct(string $nom, 
            string $prenom, 
            int $age,
            string $region, 
            DateTime $dateArrivee,
            int $salaire){
        
        parent::__construct($nom, $prenom, $age, $region);
        $this->DateArivee = $dateArrivee;
        $this->salaire = $salaire;
    }
    
    public function anciennete():int{
        
     $today = new DateTime();
     
     $difference = $this->DateArivee->diff($today);
     
     return $difference->y;
}
public function augmentation() {
     $anciennete = $this->anciennete();
     if($anciennete < 5) {
           $this->salaire *= 1.02;
           
       }elseif($anciennete < 10) {
          $this->salaire *= 1.05;
		
       }else{
          $this->salaire *= 1.1;
		
      }
		     
 }
				
public function getSalaire():int {
		
       return $this->salaire;
		
 }
		
}
   

