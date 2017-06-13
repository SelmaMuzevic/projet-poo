<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once './PetitChien.php';
        $chien1 = new PetitChien();
        $chien1->nom = 'Nora';
        $chien1->race = 'samoyed';
        $chien1->couleur = 'blanc';
        $chien1->dateNaissance = "10/07/2011";
        
        echo $chien1->nom .' ';
        echo $chien1->race . ' ';
        echo $chien1->dateNaissance .' ';
        echo $chien1->couleur .' ';
        
        $chien1->aboyer();
        echo $chien1;
        ?>
        
        
        
    </body>
</html>
