<?php
// M.S

require "../FonctionsTableaux.php";

// Saisie de l'heure et des minutes

$h = demandeEntier("Entrer une heure : ");
$m = demandeEntier("Entrer les minutes :");

// On teste les heures et les minutes
if (($h < 24) && ($m < 59))     // L'heure n'est pas égale à 24 heure 60 minutes
{
    $m++;       // Ajoute une minute au compteur
}
else if ($m == 59)
{
    $h++;       // Ajoute une heure au compteur
    $m = 0;     // On remet les minutes à 0
}

// Affichage
echo "\nDans une minute, il sera ". $h. " heure(s) et ". $m. " minute(s).\n";