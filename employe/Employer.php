<?php
//Inclus les Class
include_once "../Personne.php";
include_once "Caisse.php";

//Ajoute les class dans des instances.
$caisse = new Caisse();
/**
 * Description of Employe
 *
 * @author simplon
 */

/*
  TP heritage employé

  1) Faire une classe Employe qui hérite de la classe Personne
  2) Rajouter deux propriétés à cette classe, sa dateArrivee (qui sera de type DateTime)
  et son salaire (qui sera du int) (edited)
  3) Faire une méthode anciennete() qui calculera et renverra un int représentant le nombre
  d'années passées dans la boîte par l'employé (il faudra faire
  une comparaison entre la date du jour obtenue avec un new DateTime()
  et avec la dateArrivee de l'employé, en utilisant la méthode diff() )

  4) Faire une méthode augmentation() qui augmentera le salaire de l'employe selon son anciennete
  Un employé ayant moins de 5 ans d'ancienneté aura +2% d'augmentation de salaire
  Un employé ayant moins de 10 ans d'ancienneté aura +5% d'augmentation de salaire
  Un employé ayant plus de 10 ans d'ancienneté aura +10% d'augmentation de salaire
*/

class Employe extends Personne{
    private $dateArrivee;
    private $salaire;
    //Pour ajouter la class Caisse (l'instance).
    private $compteBancaire;
    private $caisse;
    
     
    public function __construct(string $nom, 
            string $prenom, 
            int $age, 
            string $region,
            DateTime $dateArrivee,
            int $salaire) {
        //On appel le constructeur du parent car 
        //celui ci attend des arguments pour faire une
        //personne avec toutes ses propriétés.
        parent::__construct($nom, $prenom, $age, $region);
        $this->dateArrivee = $dateArrivee;
        $this->salaire = $salaire;
        //On initialise les 2 proprieter rajouter par defautl.
        $this->compteBancaire = 0;
        $this->caisse = new Caisse();
    }
    
    public function anciennete():int {
        //On récupère la date du jour avec un new DateTime()
        //sans lui fournir d'argument
        $today = new DateTime();
        //On fait la différence entre la date du jour 
        //et la date d'arrivée de l'employé avec la
        //méthode diff.
        //Cette méthode nous renvoie un objet DateInterval
        $difference = $this->dateArrivee->diff($today);
        //On récupère le nombre d'années d'écart stockées
        //dans la propriété y du DateInterval
        return $difference->y;
    }
    
    public function augmentation() {
        //On récupère l'ancienneté de l'employé avec
        //la méthode anciennete()
        $anciennete = $this->anciennete();
        //On augmente le salaire en conséquence 2%, 5%, 10%
        if($anciennete < 5) {
            $this->salaire *= 1.02;
        }elseif($anciennete < 10) {
            $this->salaire *= 1.05;
        }else{
            $this->salaire *= 1.1;
        }
        
    }
    
    public function getSalaire():int {
        return $this->salaire;
    }
    
    //Function toucher Salaire
    public function toucherSalaire() {
        //Cible le compte bancaire ajoute de l'argent a la caisse qui 
        $this->compteBancaire += $this->caisse-> cotisation($this->salaire);
    }
}