<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(isset($_POST['name'])) {
            $post= filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);        
                include_once './Personne.php';
                include_once './Employe.php';
                $employe1 = new Employe($post['name'], $post['prenom'], $post['age'], $post['region'], new DateTime($post['date']), $post['salaire']);
                echo '<pre>';
                var_dump($employe1);
                echo '</pre>';
                $employe1->anciennete();
                echo $employe1->getSalaire();
                echo $employe1->augmentation();
                echo $employe1->getSalaire();
                echo $employe1->infosEmployé();
        }
        ?>
        <form method="POST" action="#">
           <label for="name">Nom</label><input type="text" name="name" />
           <label for="prenom">Prenom</label><input type="text" name="prenom"/>
           <label for="age">Age</label><input type="date" name="age"/>
           <label for="region">Region</label><input type="text" name="region"/>
           <label for="date">Date Arrivée</label><input type="date" name="date"/>
           <label for="salaire">Salaire</label><input type="text" name="salaire"/>
           <input type="submit" value="Envoyer"/>
        </form>    
    </body>
</html>