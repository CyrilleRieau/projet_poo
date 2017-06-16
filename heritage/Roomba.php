<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Roomba
 *
 * @author rieau
 */
class Roomba extends Robot{
    private $couleur;
    public function __construct($serialnumber, $valeur, $couleur) {
        parent::__construct($serialnumber, $valeur);
        $this->couleur = $couleur;
    }
    public function faireleMenage(){
    return '<p>J\'aime faire le menage avec un plumeau, je m\'appelle '. $this->serialnumber.', et je coûte '. $this->valeur. ' euros et je suis de couleur '.$this->couleur.'.</p>';    
    }
    
}
