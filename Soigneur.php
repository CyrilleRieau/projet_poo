<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Soigneur
 *
 * @author rieau
 */
class Soigneur extends Personnage {

    private $pansement = 10;

    public function soigner(Personnage $cible) :bool {
        if ($this->pansement > 0) {
            $cible->vie += $cible->vie / 3;
            $this->pansement --;
            return true;
        } else {
            echo 'Plus de soin dispo !';
            return false;
        }
    }

    public function genererStats():string {
        return parent::genererStats(). '<li> Pansement : '. $this->pansement. '</li>';
        //. '<table><tr><th>Pansement</th></tr><tr><td>' . $this->pansement . '</td></tr></table>';
//return '<table style="border:1px solid red;">
  // <tr>
    //   <th>Nom</th>
      // <th>Vie</th>
      // <th>Force</th>
      // <th>Defense</th>
      // <th>Pansement</th>
  // </tr>
  // <tr>
    //   <td style="border:1px solid red;">' . $this->nom . '</td>
     //  <td>' . $this->vie . '</td>
     //  <td>' . $this->force . '</td>
      // <td>' . $this->defense . '</td>
     //  <td>' . $this->pansement . '</td>    
//</tr>
//</table>';
    }
    function getPansement() {
        return $this->pansement;
    }

    function setPansement($pansement) {
        $this->pansement = $pansement;
    }


}
