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
/* On lance la methode de reevaluation des salaires.
 * 
 */
$entreprise->reevaluation();

$entreprise->verserSalaire();

echo '<pre>';
var_dump($entreprise);

echo '</pre>';

require_once './Caisse.php';
$caisse = new Caisse();
echo $caisse->cotisation(10000);
var_dump($caisse);


/**
 * 
 */
$employe = new Employe("test", 
        "test", 
        10,
        "test", 
        new DateTime(), 
        100);

$employe->toucherSalaire();
echo '<pre>';
var_dump($employe);
echo '</pre>';