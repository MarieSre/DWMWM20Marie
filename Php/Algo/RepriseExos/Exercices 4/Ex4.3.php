<?php
// M.S

// Saisie de l'heure avec les minutes et les secondes

$h = readline("Entrer l'heure : ");
$m = readline("Entrer le nombre de minute : ");
$s = readline("Entrer le nombre de seconde : ");

if (($h < 24) && ($m < 59) && ($s < 59)) // On ne peut afficher 24 heures 60 minutes et 60 secondes
{
	$s++; // Ajoute une seconde
}
else if ($s == 59)
{
    $m++;
    $s = 0;
}
/*else if (($s == 59) && ($m == 59)) // Si les minutes et les secondes sont égal à 59
{
	$h++; // Ajoute une heure
	$m = 0; // Remet les minutes à 0
	$s = 0; // Remet les secondes à 0
}*/

// Affichage

echo "\nDans une minute, il sera " . $h . " heure(s) " . $m . " minute(s) et " . $s . " seconde(s)\n";

// Revenir sur l'exercice pour ajouter une heure lorsque les minutes et les secondes sont égal à 59