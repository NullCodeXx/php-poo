<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JoueurHeal
 *
 * @author solo
 */
  //Class JoueurHeal.
    Class   JoueurHeal extends Joueurs{
        protected $bandage = 20;
        //bool est un booleen et dit au php de renvoyer sur la function true ou false.
        public function soigner(JoueurHeal $perso):bool {
            //Vérifie si les bandage son inferieur a 0.
            if($this->bandage > 0) {
                //
                $perso->vie += 10;
                $this->bandage--;
                //Si le soin marche renvoie true.
                return true;
            }
            //Si sa ne marchhe pas renvoie false.
            return false;
        }
        //Display les bandage
        public function genererstats():string {
            //retourne ce que la function generer.
            return parent::genererstats() 
            . "<li>Bandage :" . $this->bandage . "</li>";
        }
        
        public function supprimBande( JoueurHeal $utiliser) {
            $utiliser->bandage -= 1; 
        } 
    }