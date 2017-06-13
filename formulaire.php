<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Formulaire</title>
    </head>
    <body>

        <?php
        if (isset($_POST['nom'])) {

            $filtre = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            include_once './Personne.php';
            $instancePersonne = new Personne($filtre['nom'], $filtre['prenom'], $filtre['age'], $filtre['region']);

            echo '<pre>';
            var_dump($instancePersonne);
            echo '</pre>';
        }
        ?>

        <form action="personne.php" method="POST">

            <div><label>Nom</label>
                <input type="text" name="nom" placeholder="Tapez votre nom ici">
            </div>
            <div><label>Prénom</label>
                <input type="text" name="prénom" placeholder="Tapez votre prénom ici">
            </div>
            <div><label>Age</label>
                <input type="number" name="age" >
            </div>
            <div><label>region</label>
                <input type="text" name="region" >
                <button>Send</button>
            </div>




        </form>

    </body>
</html>