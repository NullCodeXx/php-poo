<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of robot
 *
 * @author solo
 */
//Robot de base
class Robot{
    //Ne sont pas accessible dans la class actuel et donc les class enfant n'aurons pas acces a cette proprieter (Roombat).
    private $numeroSerie;
    //Protected est accessible a l'interieur de la class uniquement et l'interieur de la class enfant (Roombat).
    protected $motdepasse;
    //ajoute une function saluer
    function saluer() {
        echo "Salut";
    }
    //Ajouter un construtor
    function __construct($numeroserie) {
        $this->numeroSerie = $numeroserie;
    }
}

