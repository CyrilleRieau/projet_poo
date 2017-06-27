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
include_once'./Caisse.php';

class Employe extends Personne {

    protected $salaire;
    protected $dateArrivee;
    protected $banque;
    protected $caisse;
    protected $comptebancaire;

    public function __construct($nom, $prenom, $age, $region, DateTime $dateArrivee, int $salaire) {
        parent::__construct($nom, $prenom, $age, $region);
        $this->dateArrivee = $dateArrivee;
        $this->salaire = $salaire;
        $this->caisse = new Caisse();
        $this->comptebancaire = 0;
    }

    /*
      public function diff($a, $b):int{
      $c=$a-$b;
      } */

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
        } elseif ($anciennete > 5 && $anciennete < 10) {
            return $this->salaire += ($this->salaire * 0.05);
        } else {
            return $this->salaire += ($this->salaire * 0.1);
        }
    }

    public function getSalaire(): int {
        return $this->salaire;
    }

    public function infosEmployé() {
        return '<p>L\'employe gagne ' . $this->salaire . 'et est arrivé il y a ' . $this->anciennete() . ' ans.</p>';
    }

    public function toucherSalaire() {
        $this->comptebancaire += $this->caisse->cotisation($this->salaire);
    }

    function getDateArrivee() {
        return $this->dateArrivee;
    }

    function getBanque() {
        return $this->banque;
    }

    function getCaisse() {
        return $this->caisse;
    }

    function getComptebancaire() {
        return $this->comptebancaire;
    }

    function setDateArrivee($dateArrivee) {
        $this->dateArrivee = $dateArrivee;
    }

    function setBanque($banque) {
        $this->banque = $banque;
    }

    function setCaisse($caisse) {
        $this->caisse = $caisse;
    }

    function setComptebancaire($comptebancaire) {
        $this->comptebancaire = $comptebancaire;
    }

}
