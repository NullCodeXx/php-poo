<?php

include_once "PetitChien.php";
$chien = new PetitChien("frite", "Jack Ressel", "Beige", "01/01/2000");
    echo $chien->nom . " " . $chien->race. " " . $chien->couleur. " " . $chien->dateAniverssaire ;
?>
