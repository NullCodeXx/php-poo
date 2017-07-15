<?php
// Class
class tamgochi{
    private $faim = 100;
    private $joie =100;
    private $sommeil= 100;
    private $hygiene = 100;

    // Constructor sert à modifie les valeurs
    public function __construc($qt1, $qt2, $qt3, $qt4) {
        $this->faim = $qt1;
        $this->joie = $qt2;
        $this->sommeil = $qt3;
        $this->hygiene = $qt4;
    }

    public function calcule($monter, $descente) {
        $this ->hygiene += $monter;
        $this ->hygiene -= $descente;
    }

    // Function
    public function jouer() {
        $this->hygiene -= 10;
        $this->joie += 10;
        $this->sommeil -= 10;
    }
    public function laver() {
        $this->hygiene += 10;
        $this->joie -= 10;
        $this->faim += 5;
    }
    public function dormir() {
        $this->hygiene -= 10;
        $this->joie += 10;
        $this->sommeil +=100; 
    }
    public function nourrir() {
        $this->hygiene -= 70;
        $this->joie += 30;
        $this->sommeil += 10;
        $this->faim -= 10; 
    }

    public function affetat() {
        echo "Appetis = " . $this->faim;
        echo "Humeur = " . $this->joie;
        echo "Hygiene = " . $this->hygiene;
        echo "Sommeil = " . $this->sommeil;
        
    }
}