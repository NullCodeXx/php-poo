<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Inclus le chemin courant de la class Carrer.
include_once "./Carrer.php";
//Recupere la class Carrer.
echo "Affiche moi nombre entier puis un carrer rouge. <br />";
$carrer = new Carrer(125 ,"red");

//Add valeur aux proprieter.
echo $carrer->afficherSuperficie();
echo $carrer->afficher();

