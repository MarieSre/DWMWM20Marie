<?php
// M.S

// Saisi de l'heure avec les minutes et les secondes

$h = readline("Entrer l'heure : ");    
$m = readline("Entrer le nombre de minute : ");
$s = readline ("Entrer le nombre de seconde");

if (($h < 24) && ($m < 60) && ($s < 60))     // L'heure ne peut être égal à 24. Les minutes ne peuvent être égal à 60
{
    $s++;       // Ajouter une minute
}

// Affichage

echo "\nDans une minute, il sera " . $h . " heure(s) " . $m ." minute(s) et" . $s . " seconde(s)\n";