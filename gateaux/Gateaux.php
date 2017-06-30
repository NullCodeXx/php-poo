<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gateaux
 *
 * @author solo
 */
class Gateaux {
    //variable de base.
    public $name;
    public $price;
    public $image;
    public $ingredient;
    

    function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
        function __toString() {
        return $this->name . " " . $this->price . " ";
    }

}
