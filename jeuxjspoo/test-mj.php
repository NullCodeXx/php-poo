<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once "./MaitreJeux.php";
include_once "./classjoueur.php";

if(isset($_SESSION['mj'])) {
    $mj = $_SESSION['mj'];
}else {
    /*
       Sinon on crée une nouvelle instance de mj en lui
     * fournissant deux instances de personnage
     * pas besoin de stocker les pero en variable
     * c'est mintenant le maitre qui s'en charge.
     */
    $mj = new MaitreJeumodulo(
            new Joueurs("Perso1",100,0,10),
            new Joueurs("Perso2",100,0, 10)
            );
    
    /*
     * Filter_has_var vérifie si une varible est présent 
     * dans le post ou dans le get(seilon le premier argument) qu'on lui passe.
     */
    
    if(filter_has_var(INPUT_POST, "attaque")) {
        $mj->attaque();
    }
    
    if(filter_has_var(INPUT_POST, "defense")) {
        $mj->defense();
    }
}
    echo $mj->affichage();
    $_SESSION["mj"] = $mj;
    
    ?>

<form method="POST">
    <button name="attaque">Attaque</button>
    <button name="defense">defendre</button>
</form>



