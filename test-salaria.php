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
        include_once './Personne.php';
                include_once './Employe.php';
                $employe1 = new Employe('Ra', 'Ro', 23, 'Re', new DateTime('2012-06-09'), 4500);
                echo $employe1->anciennete();
echo '<br/>'.$employe1->getSalaire();
echo '<br/>'.$employe1->augmentation();
echo '<br/>'.$employe1->getSalaire();

        ?>
    </body>
</html>
