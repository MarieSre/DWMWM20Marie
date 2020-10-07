<?php
// M.S

$heure = readline("Entrer le nombre d'heures :"); // Saisie de l'heure par l'utilisateur
$minute = readline("Entrer le nombre de minutes :"); // Saisie des minutes par l'utilisateur
$seconde = readline("Entrer le nombre de secondes :"); // Saisie des secondes par l'utilisateur

/*if (($heure > -1) && ($heure <= 23))
{
    $heure++;
}*/
if (($seconde > -1) && ($seconde <= 59)) // Ajoute une seconde
{
    $seconde++;

} else if ($seconde = 60) // Ajoute une minute, une horloge n'affichera jamais 60 secondes
{
    $minute++;
    $seconde = 0;

} /* else if ($minute = 60)
{
$heure++;
$minute = 0;
}*/

// Affichage de l'heure une secode plus tard

echo "Dans une minute, il sera " . $heure . " heure(s) , " . $minute . " minutes(s) et " . $seconde . " seconde(s) ."; 
