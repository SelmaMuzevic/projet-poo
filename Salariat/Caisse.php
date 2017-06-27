<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Caisse
 *
 * @author selma
 */
class Caisse {
    private static $depot = 0;
    
    /** Une méthode qui prélève les cotisations sociales a un salaire
     * super-brut et les met dans sa caisse de dépôt en returnant le reste.
     * @param int $salaire le salaire dont il faudra prélever les
     * cotisations (plus ou moins 45%).
     * @return int le salaire prélevée des cotisations.
     */
    public function cotisation(int $salaire){
        self::$depot += $salaire * 0.45;
        echo self::$depot . '<br/>';
        return $salaire * 0.55;
    }
}
