<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PetitChien
 *
 * @author solo
 */

/*La class avec majuscule*/
class PetitChien {
    public $nom;
    public $race;
    public $dateAniverssaire;
    public $couleur;
    
    //Crée une function d'aboyer    
    public function aboyer() {
       echo "waouf waouf";
    }
    
    public function __toString() {
                return "mon nom est" . $this->nom . "ma couleur est" .$this->couleur . 
                        "ma date d'aniverssaire est " . $this->dateAniverssaire . 
                        "ma race est" . $this->race;                    
    }
    public function __construct($argunom, $argurace, $argucouleur, $argudateaniv) {
        $this->nom = $argunom; 
        $this->race = $argurace; 
        $this->couleur = $argucouleur; 
        $this->dateAniverssaire = $argudateaniv; 
        
    }
}
