<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of roombat
 *
 * @author solo
 */

//Copie le bot Robo et donc utilise les meme function et puisqu'il n'a pas de construct il utilisera aussi le construc du parent
//soit le Robot et donc le construt a un argument alors lors de l'appel il faudra aussi ajouter une valeur argument dans
//testrobot.php
//Roombat est l'héritier.
class Roombat extends Robot{
    //ici on ajoute d'autre fonction de plus de celle qui connait de sont parent.
    function fairemenage() {
        return "je gratte le sol";
    }
}
