<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Caisse
 *
 * @author solo
 */
//On crée une class Caisse.
class Caisse {
    //Proprieter du depot doit etre egal a 0.
    //Si on laisse le depot de base sans le static largent ne partargera pas le meme depot
    // et donc on veut que tous (employer) utilise le meme depot d'argent. 
    private static $depot = 0;
    
    //On crée une function cotisation.
    public function cotisation(int $salaire) {
        //Cible le dépot et si += au salaire(argument) * 0.45 qui sera donner au depot.
        //Due a l'object static depot, pour acceder a la proprieter on utilise self:: . 
        self::$depot += $salaire * 0.45;
        echo self::$depot . "<br /";
        //Retourne le reste soit 0;55 au salaire.
        return $salaire * 0.55;
    }
}
