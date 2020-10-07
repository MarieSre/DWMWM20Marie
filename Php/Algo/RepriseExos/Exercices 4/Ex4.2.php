<?php
// M.S

// Saisie de l'heure avec les minutes

$h = readline("Entrer l'heure : ");
$m = readline("Entrer le nombre de minute : ");

if (($h < 24) && ($m < 59))  // On ne peut afficher 24 heures et 60 minutes
{	
    $m++; // Ajoute une minute
}
else if ($m == 59)
{
    $h++;       // Ajoute une heure
    $m = 0;     // Remet les minutes à zéro
}

// Affichage

echo "\nDans une minute, il sera " . $h . " heure(s) " . $m . " minute(s).\n";