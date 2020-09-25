<?php
// M.S

$heure = readline("Entrer le nombre d'heures :"); // Saisi de l'heure par l'utilisateur
$minute = readline("Entrer le nombre de minutes :"); // Saisi de l'heure par l'utilisateur

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

echo "Dans une minute, il sera " . $heure . " heure(s) et " . $minute . " minutes(s) ."; // Affichage de l'heure une minute plus tard
