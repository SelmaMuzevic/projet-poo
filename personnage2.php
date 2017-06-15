<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once './Personnage.php';
session_start();

if(isset($_SESSION['perso1']) 
        && isset($_SESSION['perso2'])){
    
    $perso1 = $_SESSION['perso1'];
    $perso2 = $_SESSION['perso2'];
    
    
}else{
    
$perso1 = new Personnage('Perso1',200, 200, 300);
$perso2 = new Personnage('Perso2', 200, 300, 250);

}


$perso1->attaquer($perso2);
$perso1->defendre();

$perso2->defendre();
$perso2->attaquer($perso1);

echo $perso1->genererHTML();
echo $perso2->genererHTML();

$_SESSION['perso1'] = $perso1;
$_SESSION['perso2'] = $perso2;
