<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
include_once "./objectclass.php";
$instance = new tamgochi(); 
$instance -> dormir();
$instance -> laver();
$instance -> jouer();
$instance -> nourrir();
$instance -> affetat();



?>
    <h1>Tamagochi TP</h1>
</body>
</html>


