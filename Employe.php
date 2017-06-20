<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employe
 *
 * @author rieau
 */
include_once './Personne.php';

class Employe extends Personne {

    private $salaire;
    private $dateArrivee;

    public function __construct($nom, $prenom, $age, $region, DateTime $dateArrivee, int $salaire) {
        parent::__construct($nom, $prenom, $age, $region);
        $this->dateArrivee = $dateArrivee;
        $this->salaire = $salaire;
    }
    /*
    public function diff($a, $b):int{
        $c=$a-$b;
    }*/
    public function anciennete(): int {
        $datejour = new DateTime();
        //$datejour->format('d-m-Y');
        $anciennete = $this->dateArrivee->diff($datejour);
        return $anciennete->y;
    }

    public function augmentation() {
        $anciennete = $this->anciennete();
        if ($anciennete < 5) {
            return $this->salaire += ($this->salaire * 0.02);
        } elseif ($anciennete  > 5 && $anciennete  < 10) {
            return $this->salaire += ($this->salaire * 0.05);
        } else {
            return $this->salaire += ($this->salaire * 0.1);
        }
    }
    public function getSalaire() : int {
        return $this->salaire;
    }
    public function infosEmployé() {
        return '<p>L\'employe gagne ' . $this->salaire . 'et est arrivé il y a ' . $this->anciennete() . ' ans.</p>';
    }

}
