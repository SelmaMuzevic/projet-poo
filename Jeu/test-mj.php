<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once './Heritage./Personnage.php';
include_once '../MaitreJeu.php';

session_start();
if(isset($_SESSION['mj'])){
    $mj=$_SESSION['mj'];
    
}else{
        $mj = new MaitreJeu(
              new Personnage(100, 0, "Perso1", 10),
              new Personnage(100, 2, "Perso2", 9)
                    ); 
}

if(filter_has_var(INPUT_POST, 'attaque')) {
            $mj->attaque();		
}
if(filter_has_var(INPUT_POST, 'defense')) {
            $mj->defense();		

}
echo $mj->affichage();
$_SESSION['mj'] = $mj;

?>

<form method="POST">
		
  <button name="attaque">Attaquer</button>
  <button name="defense">Défendre</button>
		
</form> 
