<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "<h1>" . "TATAAA MES SUPER GATEAUX" . "<h1>";
include_once "Gateaux.php";
include_once "Cookie.php";
include_once "Crumble.php";
include_once "Smartise.php";

//INSTANCE
$gateaux = [new Cookie(), new Crumble(), new Smartise()];

//BOUCLE IMAGE
foreach($gateaux as $gateau) {
    // echo "<div style='display: flex;justify-content: space-around;'";
        echo $gateau->name . " " . "<img style = 'width: 300px;display: flex;justify-content: space-around;align-items= center' src='".$gateau->image . "'/>". " " . "<br />";
    // echo "</div>";
    //BOUCLE INGREDIENT.
    foreach($gateau->ingredient as $ingredi) {
        echo $ingredi;
    }
    
}

