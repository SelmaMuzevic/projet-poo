<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once './Employe.php';
/**
 * Description of Employe
 *
 * @author selma
 */
class Entreprise{
    private $employes;
    private $CA;
    private $benefices = 0;
    
    function __construct(array $employes,
                         int $CA) {
        $this->employes = $employes;
        $this->CA = $CA;
    }
    
    public function reevaluation() {
        
        foreach($this->employes as $employe){
            
        
            if($employe->anciennete() >= 1){
                
                $employe->augmentation();
            }
        }
    }
    /**
     * Méthode qui permets de verser le salaire a tous les employés
     * de l'entreprise et de calculer des bénéfices de celle ci en conséquence.
     */
    public function verserSalaire() {
        foreach($this->employes as $employe){
            $employe->toucherSalaire();
            $totalSalaires += $employe->getSalaire();
        }
        $this->benefices = $this->CA - $totalSalaires;
        }
}
