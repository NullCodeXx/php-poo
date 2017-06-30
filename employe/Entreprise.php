<?php

require_once './Employe.php';
/**
 * Description of Entreprise
 *
 * @author simplon
 */
//On crée la class Entreprise/
class Entreprise {
    //On crée les proprieter de l'Entreprise soit Emplois et CA.
    private $employes;
    private $CA;
    
    //On rend tout sa vivant tout avec le construct.
    //ON met un typpage array pour employe et on arrondie la valeur du CA.
    function __construct(array $employes, int $CA) {
        $this->employes = $employes;
        $this->CA = $CA;
    }
    
    //La method reevaluation permet de recalcule le salaire en function de 
    //l'ancienneter d'année.
    public function reevaluation() {
        //La boucle parcours les employer
        foreach($this->employes as $employe) {
            //Condition Si : employer utilise la function ancienneter est >= 1 
            //alors employer utilise la function augmentation.
            if($employe->anciennete() >= 1 ) {
                $employe->augmentation();
            }
        }
    }
    
    public function verserSalaire() {
        $totalSalaire = 0;
        foreach($this->employes as $employe) {
        $employe->toucherSalaire();
        $totalSalaire += $employe->getSalaire();
        }
        $this->benefices = $this->CA - $totalSalaire;
    }
}
