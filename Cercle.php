<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cercle
 *
 * @author selma
 */
class Cercle {
    private $rayon;
    private $point;
    
    function __construct(int $rayon, int $point) {
        $this->rayon = $rayon;
        $this->point = $point;
    }
}
