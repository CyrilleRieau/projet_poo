<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personnage
 *
 * @author rieau
 */
class Personnage {

    private $vie;
    private $force;
    private $defense;
    private $nom;

    public function __construct($nom, $vie, $force, $defense) {
        $this->vie = $vie;
        $this->force = $force;
        $this->defense = $defense;
        $this->nom = $nom;
    }

    function getVie() {
        return $this->vie;
    }

    function getForce() {
        return $this->force;
    }

    function getDefense() {
        return $this->defense;
    }

    function getNom() {
        return $this->nom;
    }

    function setVie($vie) {
        $this->vie = $vie;
    }

    function setForce($force) {
        $this->force = $force;
    }

    function setDefense($defense) {
        $this->defense = $defense;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    public function attaquer(Personnage $cible) {
        $degat = $this->force - $cible->defense;
        if ($degat <= 0) {
            $degat = 1;
        }
        $cible->vie -= $degat;
    }

    public function defense() {
        $this->defense += $this->defense;
    }

    public function genererHTML(): string {
        return '<table style="border:1px solid red;">
   <tr>
       <th>Nom</th>
       <th>Vie</th>
       <th>Force</th>
       <th>Defense</th>
   </tr>
   <tr>
       <td style="border:1px solid red;">' . $this->nom . '</td>
       <td>' . $this->vie . '</td>
       <td>' . $this->force . '</td>
       <td>' . $this->defense . '</td>
   </tr>
</table>';
    }

}
