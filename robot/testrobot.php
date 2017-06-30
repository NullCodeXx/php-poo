<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//On inclus les pages robot.
include_once "./robot.php";//Saluer
include_once "./roombat.php"; //Faire le menage
include_once "./Roombeta.php"; //Ajout de la nouvelle class Rombetat Serpiellere

//On crée des instance des pages robot afin de pouvoir les utiliser.
$instBotrobot = new Robot(10); //On ajoute un argument du construc.
$instBotRombat = new Roombat(10187); // Roombat hérite de la class Robot puisqu'il na pas de construct pour lui meme.
$instPlayerRoombeta = new Roombeta(0000);//Roombeta est la fusion de roombat et de Robot.


//On affiche les instances qui sont les class et qui contienne les function que nous lui avons associé.
echo $instBotRombat ->fairemenage();
echo $instBotrobot ->saluer();
echo $instPlayerRoombeta -> fairemenage(); //Regroupe les proprieter parent.

?>