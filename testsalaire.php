<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//On include notre Class Employer.
include_once "./Employer.php";
//instance
$employer = new Employer("ISA", "Isabelle", 19, "Rhône Alpes", new DateTime("2014-04-02"), 3000);

echo "<br />";
echo $employer->getSalaire() . "euros";
echo "<br />";
$employer->augmentation();
echo $employer->getSalaire() . "euros"; 

echo "<br />";
$date = new DateTime();
echo $date->format("d/m/Y H:i");