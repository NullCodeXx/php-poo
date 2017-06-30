<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Roombeta
 *
 * @author solo
 */
class Roombeta extends Roombat{
    //Cherche la function parent qui existe deja et lui la surcharger ou ecraser.
    public function fairemenage() {
        //cherche chez mon parent la proprieter function fairemenage().
        return parent::fairemenage() .  "Je fais la serpillère";
    }
    
}
