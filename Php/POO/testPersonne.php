<?php

require "PersonneEtVoiture.Class.php";
require "Voiture.Class.php";


$v1 = new Voiture("Citroën", "Saxo", "30000");
$p1 = new Personne("Humbert", "Mathieu", $v1);

var_dump($v1);
var_dump($p1);
echo "Il possède une voiture de la marque : ". $p1->getVoiture()->getMarque();