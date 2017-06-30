<!DOCTYPE html>
<html lang="fr ">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Game Poo</title>
    </head>
    <body>
        <h1>TP POO GAME</h1>
        <?php
        //On recupere la page et la class.
        include_once "./classjoueur.php";
        include_once "./JoueurHeal.php";
        include_once "./MaitreJeux.php";

        $instanceMJ = new MaitreJeu();
        
        //Session de sauvegarde joueur, fin du script.
        session_start();
        //Vérifie si j'ai mes perso dans ma session.
        if (isset($_SESSION["statsLife"]) && isset($_SESSION["statsForce"])) {
            $instPlayer1 = $_SESSION["statsLife"];
            $instPlayer2 = $_SESSION["statsForce"];
        } else {
            //On crée les 2 instance differente de la class
            $instPlayer1 = new Joueurs("Mechant Riyu", 10, 20, 100);
            $instPlayer2 = new JoueurHeal("Soigneur ken", 20, 10, 100);
        }

        //ON les fais attaquer.
        $instPlayer1->attack($instPlayer2);
        $instPlayer2->attack($instPlayer1);


        //On les fais defendre.
        $instPlayer1->defense();
        $instPlayer2->defense();

        

        //Formulaire button attack defense potion.
        //Session de sauvegarde joueur, fin du script.
        $_SESSION["statsLife"] = $instPlayer1;
        $_SESSION["statsForce"] = $instPlayer2;
        $_SESSION[""] = $instanceMJ;
        // echo '<pre>';
        // var_dump($_SESSION);
        // echo '</pre>';
        
        //Recuperation post button attack et defense.
//        $attaque = ;
//        $defense = ;
        
        //A voir avec Jean.
        if(isset($_POST["attack"])) {
            $instPlayer1->attack($instPlayer2);
        }else if (isset($_POST["defense"])){
            $instPlayer2->defense();
        }else {
            echo "La fiche n'est pas renseigner";
        }
        
        //On affiche les stats le mettre a la fin pour que tout sois pris en compte.
        echo "Resultat de l'instance : " . $instPlayer1->genererHTML();
        echo "Resultat de l'instance : " . $instPlayer2->genererHTML();
        
        echo "<form method='POST'>";
        echo "<input type='submit' name='attack' value='Attacker'>";
        echo "<input type='submit' name='defense' value='Defense' ";
        echo "</form>";
        ?>
    </body>
</html>