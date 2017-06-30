<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gateaux2
 *
 * @author solo
 */

class Crumble extends Gateaux{
    
    function __construct() {
        parent::__construct("Crumble",2);
        $this->image = "./crumble.jpg";
        $this->ingredient = ["Caramel", " " , "Praliner", " " , "Sucre"];
    }
    
}