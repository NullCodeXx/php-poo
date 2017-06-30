<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Rappeljoueur
 *
 * @author solo
 */
//Object modele joueur.
//La class c'est le moule.
class Rappeljoueur {
    public $name;
    public $height;
    public $width;
    public $age;
    public $nationality;
    
    //Construct sert a crée mon object avec minimum  2 parametre.
    //les arguments c'est ce que l'on veut que l'utilisateur passe change.
    //Le construct c'est la gateau.
    function __construct($name, $age){
        //initialiser l'objet $this (c'est l'instance pour parler de l'object).
        //On donne forme a notre instance de la class.
        $this->name = $name;
        $this->age = $age;
        //ajouter une valeur par default.
        $this->nationality = "Français";
        $this->height = "1m80";
        $this->width = "70 kg";   
    }
}


//On appel le gateaux , l'instance avec les argument que nous avons mis dans le construct.
$Joueurs = new Rappeljoueur("Djaafar", 25);
//On peut changer la valeur d'une valeur par default.
$joueurs->nationality = "Chinois";


//###############################################
//###############################################
//###############################################
//###############################################

//Les class sont sur leur propre page respective mais la je m'en fiche ahah...

//Modele Object Gateaux.
Class cake {
    public $name;
    public $price;
    //crée mon object.
    function __construct($name, $price) {
        //initialise mes proprieter et les assigne a mes arguments/
        $this->name = $name;
        $this->price = $price;
    }
}

//J'appelle ma class vivante grace au construct et je met mes instance dans mes tableau.
$cakes = [new cake("cheescake", 20), new cake("apple pie", 14)];
//On ajoute une nouvelle valeur un nouveau gateaux.
$cakes []= [new cake("brownie", 8)];

//Faire une boucle pour afficher tout nos gateaux.
foreach($cakes as $cake) {
    //affiche moi le nom et le prix des gateaux.
    echo $cake->name . " " .  $cake->price . "$" . "<br/";
}