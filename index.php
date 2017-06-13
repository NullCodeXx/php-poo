<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            /*inclure la class et le chemin de la page PetitChien.php*/
            include_once './PetitChien.php';
            //L'instance minuscule, class majuscule.
            $petitChien = new PetitChien();
            /*Change ajoute la valeur au clef*/
            $petitChien ->nom = "frite";
            $petitChien ->couleur= "blue";
            $petitChien ->dateAniverssaire= "01/01/2000";
            $petitChien ->race= "jackressel";
            
            /*appel la function sur la class */
            $petitChien ->aboyer();
            
            echo $petitChien;
        ?>
    </body>
</html>
