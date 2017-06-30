<?php
//Ici on recupere Employe et entreprise.
require_once './Employe.php';
require_once './Entreprise.php';

//ON crée une instance avec un CA de 10 000$ et ont lui ajoute la class employe sous forme d'instance 
//pour lui ajouter un Employe et donc nous voulons 3 employer, 
//donc repeter les instances et changer juste les valeurs des arguments.
$entreprise = new Entreprise([
    new Employe("Bobson", "Bobby", 35, "Rhône Alpes", new DateTime('2010-10-05'), 4000),
    new Employe("Johnson", "Peter", 22, "Rhône Alpes", new DateTime('2015-09-05'), 3000),
    new Employe("Maxson", "Larry", 28, "Rhône Alpes", new DateTime('2017-01-14'), 3450)
], 10000);

//On appel la function de l'entreprise qui va recalculer.
$entreprise->reevaluation();
//var_dump affiche au details les valeurs d'une variable et <pre> mise en page.
echo '<pre>';
var_dump($entreprise);
echo '</pre>';

