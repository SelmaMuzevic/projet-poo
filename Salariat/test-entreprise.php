<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once './Employe.php';
include_once './Entreprise.php';

$entreprise = new Entreprise([
    new Employe('Bobson', 'Bobby', 35, 'Rhone Alpes', new DateTime('2010-10-05'), 4000),
    new Employe('Johnson', 'Peter', 22, 'Rhone Alpes', new DateTime('2010-10-05'), 3000),
    new Employe('Maxson', 'Larry', 28, 'Rhone Alpes', new DateTime('2010-10-05'), 3450)
], 10000);

$entreprise->reevaluation();
var_dump($entreprise);