<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gateaux3
 *
 * @author solo
 */
class Cookie extends Gateaux{
    function __construct() {
        parent::__construct("Cookie",2);
        $this->image = "./cake.JPG";
        $this->ingredient = ["Farine ", "Sucre ", "Sel "];
    }
}