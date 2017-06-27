<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../Employe.php';

$employe = new Employe('Bobson', 
        'Bob', 
        40, 
        'Rhone Alpes', 
        new DateTime('2014-04-02'),
        3000);

echo $employe->anciennete();