<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Carrer
 *
 * @author solo
 */


class Carrer {
    //Add 2 propriter
    private $taille;
    private $couleur;
    //typer les argument int et string = nombre entier pas trop grand, couleur est une string et donc 
    //on force le php a nous mettre des restriction, si c'est pas un nombre ou une chaine de caractere alors
    //envois nous une erreur.
    public function __construct(int $taille, string$couleur) {
        $this -> taille = $taille;
        $this -> couleur = $couleur;
    }
    //La difference entre le getter setter et le __contruct est : si oui ou non on veut le rendre accessible de l'exterieur
    // et donc pouvoir modifier les valeurs de l'exterieur sinon le construc le rend inaccessible.
    
    //Ont type le retour d'une function avec int il faut que la fonction nous renvoie un nombre entier.
    public  function afficherSuperficie():int {
        return $this->taille * $this->taille;
    }
    
    public function afficher():string {
        $style = "width:" . $this->taille ."px;"
                . "height:" . $this->taille ."px;"
                . "background-color:" . $this->couleur ;
        //On met le style dans une balise.
        return '<div style="' . $style . '"></div>';
    }
}