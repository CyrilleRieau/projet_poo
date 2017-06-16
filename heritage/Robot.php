<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Robot
 *
 * @author rieau
 */
class Robot {
    protected $serialnumber;
    protected $valeur;
    public function __construct($serialnumber, $valeur) {
        $this->serialnumber = $serialnumber;
        $this->valeur = $valeur;
    }
    public function saluer(){
        return '<p>Je suis le robot n°'. $this->serialnumber.'. Aloha !</p>';
    }
}
