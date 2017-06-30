<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MaitreJeux
 *
 * @author solo
 */
//Recupere la classJoueur
include_once "./classjoueur.php";
//
//class Maitrejeux {
//    private $perso1;
//    private $perso2;
//    private $persoActif;
//    private $persoCible;
//    
//    function __construct(Joueurs $perso1, Joueurs $perso2) {
//        $this->perso1 = $perso1;
//        $this->perso2 = $perso2;
//    }
//}






//facons pas tres modulable.
class MaitreJeumodulo {
    public $joueur1;
    public $joueur2;
    private $tour = 1;
    
    function __construct($joueur1, $joueur2) {
        $this->joueur1 = $joueur1;
        $this->joueur2 = $joueur2;
    }
    
    public function attaquer() {
        //Si le numero de tour est paire.
        if($this->tour % 2 == 0) {
            $this->joueur1->attack($this->joueur2);
        }else {
            //Si le numero de tour est impaire.
            $this->joueur2->attack($this->joueur1);
        }
        //Incrémente le tour de 1.
        $this->tour++;
    }
    
    public function defense() {
        //Pareil que la function attaque.
        if($this->tour % 2 == 0) {
            $this->joueur1->defense();
        }else {
            $this->joueur2->defense();
        }
        $this->tour++;
    }
    
    public function affichage() {
        
    }
    


}
