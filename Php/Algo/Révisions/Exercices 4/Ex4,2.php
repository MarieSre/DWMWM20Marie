<?php
// M.S

// Saisie de l'heure et des minutes
$heure = readline("Entrer le nombre d'heures :"); 
$minute = readline("Entrer le nombre de minutes :"); 

/*if (($heure > -1) && ($heure <= 23))
{
    $heure++;
}*/

if (($minute > -1) && ($minute <= 59)) // Ajoute une minute
{
    $minute++;
} else if ($minute = 60) // Ajoute une heure, une horloge n'affichera jamais 60 minutes
{
    $heure++;
    $minute = 0;
}

// Affichage de l'heure une minute plus tard

echo "Dans une minute, il sera " . $heure . " heure(s) et " . $minute . " minutes(s) ."; 