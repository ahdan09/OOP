<?php

    require_once('animal.php');
     require_once('frog.php');
     require_once('ape.php');

    $kambing = new Animal("Shaun");

    echo "Nama: " . $kambing->name . "<br>";
    echo "Legs: " . $kambing->legs . "<br>";
    echo "cold blooded: " . $kambing->cold_blooded . "<br> <br>";

    $kodok = new frog("Frog");

    echo "Nama: " . $kodok->name . "<br>";
    echo "Legs: " . $kodok->legs . "<br>";
    echo "cold blooded: " . $kodok->cold_blooded . "<br>";
    echo "jump: " . $kodok->jump() ."<br> <br>";

    $monyet = new ape("Apee");

    echo "Nama: " . $monyet->name . "<br>";
    echo "Legs: " . $monyet->legs . "<br>";
    echo "cold blooded: " . $monyet->cold_blooded . "<br>";
    echo "Yell: " . $monyet->Yell() ."<br> <br>";

?>