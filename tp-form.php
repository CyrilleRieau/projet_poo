<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once './Carre.php';
        include_once './Cercle.php';
        $nouveaucarre = new Carre(40, 'red');
        $nouveaucarre->afficher();
        $nouveaucarre->afficherSuperficie();
        $carre2 = new Carre(27, 'royalblue');
        $carre2->afficher();
        $carre2->afficherSuperficie();
        $carre3 = new Carre(117, 'yellow');
        $carre3->afficher();
        $carre3->afficherSuperficie();
        echo '<br/>';
        include_once './Point.php';
        $pointA = new Point(10, 5);
        $pointB = new Point(245, 75);
        $pointC = new Point(500, 500);
        echo $pointA->afficher();
        echo $pointB->afficher();
        echo $pointA->distanceFrom($pointB);
        echo '<br/>';
        echo $pointA->afficherDistance($pointA, $pointB);
        $cercle1 = new Cercle(75, $pointC);
        echo $cercle1->afficher();
        ?>
    </body>
</html>
