<?php
//M.S

// Saisie de trois lettres / noms
$l1 = strtoupper(readline("Entrer une lettre/un nom : "));
$l2 = strtoupper(readline("Entrer une lettre/un nom : "));
$l3 = strtoupper(readline("Entrer une lettre/un nom : "));

// On vérifie l'ordre
if (($l1 < $l2) && ($l1 < $l3) && ($l2 < $l3))
{
    echo "Ordre alphabétique";
}
else
{
    echo "Ordre non alphabétique";
}