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
        <form method="POST" action="">
            <input type="submit" name="attaque" value="Attaque"/>
            <input type="submit" name="defendre" value="Defendre"/>
        </form>
        <form method="POST" action="">
            <input type="submit" name="attaque2" value="Attaque"/>
            <input type="submit" name="defendre2" value="Defendre"/>
        </form>
        
        <?php
        include_once('./Personnage.php');
        include_once('heritage/Robot.php');
        include_once('heritage/Roomba.php');
        session_start();
        
        if (isset($_SESSION['perso1']) && isset($_SESSION['perso2'])){
        $perso1 = $_SESSION['perso1'];
        $perso2 = $_SESSION['perso2'];
        } else {
            $perso1=new Personnage('Eduardo', 80, 14, 14);
            $perso2=new Personnage('Miguel', 75, 19, 12);
        }
            
        if (isset($_POST['attaque'])) {
           $perso1->attaquer($perso2); 
        }
        if (isset($_POST['defendre'])) {
            $perso1->defense();
        }
        if (isset($_POST['attaque2'])) {
           $perso2->attaquer($perso1); 
        }
        if (isset($_POST['defendre2'])) {
            $perso2->defense();
        }
        //$perso1->attaquer($perso2);
        //$perso2->defense();
        
        //$perso2->attaquer($perso1);
        //$perso1->defense();
        echo $perso1->genererHTML();
        echo $perso2->genererHTML();
        $_SESSION['perso1']=$perso1;
        $_SESSION['perso2']=$perso2;
        $robot1 = new Robot('34545', 2345);
        $roomba1 = new Roomba('4567T6', 143235, 'bleu');
        echo $robot1->saluer();
        echo $roomba1->saluer();
        echo $roomba1->faireleMenage();
        ?>
    </body>
</html>
