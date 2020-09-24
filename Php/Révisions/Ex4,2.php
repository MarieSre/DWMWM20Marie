<?php
// M.S

$heure = readline ("Entrer le nombre d'heures :");
$minute = readline ("Entrer le nombre de minutes :");

if (($heure >= 24) && ($minute >= 60))
{
    echo "Saisie incorrecte, veuillez recommencer";

} else if (($heure > -1) && ($heure <= 23))
{
    $heure++;
}

if (($minute > -1) && ($minute <= 59))
{
    $minute++;
}


echo "Dans une minute, il sera " . $heure . " heure(s) et " . $minute . " minutes(s) .";
