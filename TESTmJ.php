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
        include_once './MaitreJeu.php';
        include_once './Personnage.php';
        
        session_start();
        if(isset($_SESSION['mj'])) {
            $mj = $_SESSION['mj'];
        } else {
            $mj = new MaitreJeu(
                    new Personnage('Eduardo', 100, 30, 20), 
                    new Personnage('Raimundo', 125, 35, 15));
        }
        if(filter_has_var(INPUT_POST, 'attaque')){
            $mj->attaquer();
        }
        if(filter_has_var(INPUT_POST, 'defendre')){
            $mj->defense();
        }
        echo $mj->affichage();
        $_SESSION['mj']=$mj;
        ?>
        <form method="POST" action="">
            <input type="submit" name="attaque" value="Attaque"/>
            <input type="submit" name="defendre" value="Defendre"/>
        </form>
    </body>
</html>
