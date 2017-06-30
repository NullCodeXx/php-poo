<?php

//Include l'employer qui lui aussi include personne.
include_once './Employe.php';
//On crée l'instance employe avec ces argument dans l'ordre.
$employe = new Employe('Bobson','Bob',40,'Rhône Alpes',new DateTime('2011-04-02'),3000);
//on appel la method qui est l'instance employe
echo $employe->anciennete();
//mis en forme et affichage du salaire en appellant les methods de l'instance de employe.
echo '<br/>';
echo $employe->getSalaire() . '€';
echo '<br/>';
$employe->augmentation();
//ici on regarde apres l'augmentation si le salaire a evoluer.
echo $employe->getSalaire() . '€';

//Exemple pour afficher le DateTime.
echo '<br/>';
//Instance employer avec ces proprieter necessaire, Etats-Unien (année-mois-jour)
$date = new DateTime();
//Pour afficher une date, on utilise la méthode
//format() de DateTime qui attend en argument une string
//représentant la façon dont on veut l'afficher
//Ici, on l'affiche en mode jj/mm/yyyy hh:mm
//Les codes sont dispos dans la doc php
echo $date->format('d/m/Y H:i');
