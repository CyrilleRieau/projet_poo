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
require_once'./Employe.php';
require_once './Entreprise.php';
$entreprise = new Entreprise([$employe1 = new Employe("A", "A", 25, "Rhône-Alpes", new DateTime('2010-10-05'), 4000),
   $employe2 = new Employe("B", "B", 45, "Rhône-Alpes", new DateTime('2006-11-05'), 3000),
   $employe3 = new Employe("C", "C", 35, "Rhône-Alpes", new DateTime('2014-10-05'), 3450)], 10000);
 $entreprise->reevalutation();       
 var_dump($entreprise);
        ?>
    </body>
</html>
