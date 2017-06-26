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
    private $depot;
    
    public function __construct($depot) {
        $this->depot = $depot;
    }

    public function cotisation (int $salaire) {
        $this->depot = $salaire *0.45;
        return $salaire - $this->depot;
    }
}
