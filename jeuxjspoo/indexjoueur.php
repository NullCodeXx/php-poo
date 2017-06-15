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
        include "./classjoueur.php";
    
    //Session de sauvegarde joueur, fin du script.
        session_start();
        //Vérifie si j'ai mes perso dans ma session.
        if (isset($_SESSION["statsLife"]) && isset($_SESSION["statsForce"])) {
            $instPlayer1= $_SESSION["statsLife"];
            $instPlayer2= $_SESSION["statsForce"];
        }else {
            $instPlayer1= new Joueurs("Riyu",10,20,100);
            $instPlayer2= new Joueurs("ken",20,10,100);
        }
        
        //ON les fais attaquer.
        $instPlayer1->attack($instPlayer2);
        $instPlayer2->attack($instPlayer1);
        
        //On les fais defendre.
        $instPlayer1->defense($instPlayer2);
        $instPlayer2->defense($instPlayer1);
        
       //On affiche les stats.
        echo "Resultat de l'instance : " . $instPlayer1->genererHTML();
        echo "Resultat de l'instance : " . $instPlayer2->genererHTML();
        
        //Formulaire button attack defense potion.
        

        //Session de sauvegarde joueur, fin du script.
        $_SESSION["statsLife"] = $instPlayer1;
        $_SESSION["statsForce"] = $instPlayer2;
        echo '<pre>';
        var_dump($_SESSION);
        echo '</pre>';
    ?>
</body>
</html>