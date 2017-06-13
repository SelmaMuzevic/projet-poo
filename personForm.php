<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulaire Personne</title>
    </head>
    <body>
        <form action="" method="POST">
            <label>Nom :</label>
            <input type ="text"name ="nom"/>
            <label>Prénom :</label>
            <input type ="text"name ="prenom"/>
            <label>Age :</label>
            <input type ="text"name ="age"/>
            <label>Région :</label>
            <input type ="text"name ="region"/>
            <button type ="submit" value ="Envoyer"></button>/>
            
        </form>
        
        <?php
        if(isset($_POST['nom'])){
        $post = filter_input_array(INPUT_POST, 
                FILTER_SANITIZE_STRING);
        include_once './Person.php';
        $instancePersonne = new Person($post['nom'], 
                            $post['prenom'], 
	                    $post['age'], 
	                    $post['region']);
        echo '<pre>';
	var_dump($instancePersonne);
	echo '</pre>';
        
        }
        
        ?>
    </body>
</html>
