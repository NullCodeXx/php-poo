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
    //Session de sauvegarde joueur, fin du script.
        session_start();
        //Vérifie si j'ai mes perso dans ma session.
        if isset($_SESSION["statsLife"] && $_SESSION["statsForce"]) {
            $perso1 = $_SESSION["statsLife"];
            $perso2 = $_SESSION["statsForce"];
        }else {
            $perso1 = new Joueurs("Riyu",10,20,100);
            $perso2 = new Joueurs("ken",20,10,100);
        }
        //On recupere la page et la class.
        include "./classjoueur.php";
        $instPlayer1 = new Joueurs("Riyu",10,20,100);
        $instPlayer2 = new Joueurs("ken",20,10,100);
        
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
        session_start();
        $_SESSION["statsLife"] = $instPlayer1;
        $_SESSION["statsForce"] = $instPlayer2;
        
        //Session de recuperation des stats.
        $_SESSION["statsLife"];
        $_SESSION["statsForce"];
        
    ?>
</body>
</html>