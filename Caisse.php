<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Caisse
 *
 * @author rieau
 */
include_once './Employe.php';
class Caisse {
    private static $depot=0;
    
    public function cotisation (int $salaire) {
        self::$depot += $salaire *0.45;
        return $salaire *0.55;
    }
    function getDepot() {
        return $this->depot;
    }

    function setDepot($depot) {
        $this->depot = $depot;
    }


}
