<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Entreprise
 *
 * @author rieau
 */
include_once './Employe.php';

class Entreprise {

    protected $employes;
    protected $CA;
    protected $benefices = 0;

    public function __construct(array $employes, int $CA) {
        $this->employes = $employes;
        $this->CA = $CA;
    }

    public function reevalutation() {
        foreach ($this->employes as $employe) {
            if ($employe->anciennete() >= 1) {
                $employe->augmentation();
            }
        }
    }

    public function verseSalaire() {
        $totalsalaires = 0;
        foreach ($this->employes as $employe) {
            $employe->toucherSalaire();
            $totalsalaires += $employe->getSalaire();
        }
        $this->benefices = $this->CA - $totalsalaires;
    }

    function getEmployes() {
        return $this->employes;
    }

    function getCA() {
        return $this->CA;
    }

    function setEmployes($employes) {
        $this->employes = $employes;
    }

    function setCA($CA) {
        $this->CA = $CA;
    }

    function getBenefices() {
        return $this->benefices;
    }

    function setBenefices($benefices) {
        $this->benefices = $benefices;
    }

}
