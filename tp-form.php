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
        $nouveaucarre = new Carre(40, 'red');
        $nouveaucarre->afficher();
        $nouveaucarre->afficherSuperficie();
        $carre2 = new Carre(27, 'royalblue');
        $carre2->afficher();
        $carre2->afficherSuperficie();
        $carre3 = new Carre(117, 'yellow');
        $carre3->afficher();
        $carre3->afficherSuperficie();
        ?>
    </body>
</html>
