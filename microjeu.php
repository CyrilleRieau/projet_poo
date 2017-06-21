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
            <input type="submit" name="heal" value="Heal1"/>
        </form>
        <form method="POST" action="">
            <input type="submit" name="attaque2" value="Attaque"/>
            <input type="submit" name="defendre2" value="Defendre"/>
            <input type="submit" name="heal2" value="Heal2"/>
        </form>

        <?php
        include_once('./Personnage.php');
        include_once('heritage/Robot.php');
        include_once('heritage/Roomba.php');
        include_once('heritage/Roboto.php');
        include_once('./Soigneur.php');
        include_once ('./MaitreJeu.php');
        session_start();

        if (isset($_SESSION['perso1']) && isset($_SESSION['perso2'])) {
            $perso1 = $_SESSION['perso1'];
            $perso2 = $_SESSION['perso2'];
        } else {
            $perso1 = new Personnage('Eduardo', 80, 14, 14);
            $perso2 = new Soigneur('Miguel', 75, 19, 12);
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
        if (isset($_POST['heal2'])) {
            $perso2->soigner($perso1);
        }
        //$perso1->attaquer($perso2);
        //$perso2->defense();
        //$perso2->attaquer($perso1);
        //$perso1->defense();
        echo $perso1->genererHTML();
        echo $perso2->genererHTML();
        $robot1 = new Robot('34545', 2345);
        $roomba1 = new Roomba('4567T6', 143235, 'bleu');
        $roboto1 = new Roboto('34545', 2345, 'rouge');
        echo $robot1->saluer();
        echo $roomba1->saluer();
        echo $roomba1->faireleMenage();
        echo $robot1->saluer();
        echo $roboto1->faireleMenage();
 echo $healer->genererStats();
        $_SESSION['perso1'] = $perso1;
        $_SESSION['perso2'] = $perso2;
        $_SESSION['healer'] = $healer;
        ?>
    </body>
</html>
