<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RoboSerpilliere
 *
 * @author selma
 */
class RoboSerpilliere extends RobotMenager{
    /*
     * surcharge: Lorsque on definie une methode dans un enfant qui a le meme
     * nom qu'une methode de son parent, on fait ce qu'on appele une surcharge
     * de la methode.
     * Cela revient a redefinir/remplacer la methode du parent par celle 
     * definie dans l'enfant.
     * ça ne vaut que pour la classe enfant, si j'appelle faireMenage() sur une 
     * instance de RoboMenager, il n'appellera pas la methode surchargée par
     * l'enfant, mais bien celle du RobotMenager.
     */
    public function faireMenage() {
        return parent::faireMenage()
                .'et je passe la serpilliere';
    }
}
