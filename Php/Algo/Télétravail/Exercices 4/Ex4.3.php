<?php
// M.S

// Appel de la fonction demandeEntier
require "../FonctionsTableaux.php";

// Saisie de l'heure, des minutes et des secondes

$h = demandeEntier("Entrer une heure : ");
$m = demandeEntier("Entrer le nombre de minute(s) : ");
$s = demandeEntier("Entrer le nombre de seconde(s) : ");

// On effectue des tests
if (($h < 24) && ($m <= 59) && ($s <= 59))    // On ne peut afficher 24 heures 60 minutes et 60 secondes
{
    $s++;

    if($s >= 59)    // Si les secondes sont égal à 60
    {
        $m++;       // On ajoute un au compteur des minutes
        $s = 0;     // On remet les secondes à 0
    }
    if ($m == 60)       // Si les minutes sont égal à 60
    {
        $h++;       // On ajoute un au compteur des heures
        $m = 0;     // On remet les minutes à 0
        $s = 0;     // On remet les secondes à 0
    }
} 

// Affichage
echo "\nDans une minute, il sera " . $h . " heure(s) " . $m . " minute(s) et " . $s . " seconde(s)\n";