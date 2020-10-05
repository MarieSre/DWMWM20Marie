<?php
require "Rectangle.Class.php";

$r1 = new Rectangle(["longueur" => 10, "largeur" => 10]);

var_dump($r1);
echo "\n";
echo $r1->estCarre(); // affichage de la fonction estCarre
echo $r1->toString();