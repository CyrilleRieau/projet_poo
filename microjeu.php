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
        <form>
            <input type="hidden"
        </form>
        
        <?php
        include_once('./Personnage.php');
        session_start();
        if (isset($_SESSION['perso1']) && isset($_SESSION['perso2'])){
        $perso1 = $_SESSION['perso1'];
        $perso2 = $_SESSION['perso2'];
            
        } else {
            $perso1=new Personnage('Eduardo', 80, 14, 24);
            $perso2=new Personnage('Miguel', 75, 19, 12);
            }
            
        $perso1->attaquer($perso2);
        $perso2->defense();
        
        $perso2->attaquer($perso1);
        $perso1->defense();
        echo $perso1->genererHTML();
        echo $perso2->genererHTML();
        $_SESSION['perso1']=$perso1;
        $_SESSION['perso2']=$perso2;
        ?>
    </body>
</html>
