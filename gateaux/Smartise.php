<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GateauxCookie
 *
 * @author solo
 */
class Smartise extends Gateaux{
    
    function __construct() {
        parent::__construct( " " ."Smartise",2);
        $this->image = "./smartise.jpg";
        $this->ingredient = ["Smartise", " " , "Chocolat", " " , "Gelatine"];
    }
    
}