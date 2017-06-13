<?php
class Point {
    
    private $top;
    private $left;
    
    public function __construct($top, $left) {
        $this->top = $top;
        $this->left = $left;
    }
    public function afficher():string{
        return '<div style="background-color:red;height:3px; width:3px;position:relative; top:'.$this->top.'px; left:'.$this->left.'px;"></div>';
    }
    public function distanceFrom(Point $point): float {
        return sqrt(pow($point->top - $this->top, 2) + pow($point->left - $this->left, 2));
    }
    public function afficherDistance(Point $pointA, Point $pointB):string {
        
        return 'Le second point est situé à '. $pointA->distanceFrom($pointB). 'px du premier point.';
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

