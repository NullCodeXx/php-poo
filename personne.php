<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of personne
 *
 * @author solo
 */

/*
 * Par le biais de la class personne.
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


class personne {
    private $nom;
    private $age;
    private $region;
    private $prenom;

    public function __construct($nom, $prenom, $age, $region) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->region = $region;
    }
}

