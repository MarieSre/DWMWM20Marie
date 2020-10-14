<?php
//M.S

$l1 = strtoupper ( readline ("Entrer une lettre/ un nom :"));  // Saisi de trois lettres/ noms par l'utlisateur
$l2 = strtoupper (readline ("Entrer une lettre/ un nom :"));
$l3 = strtoupper (readline ("Entrer une lettre/ un nom :"));

if (($l1 < $l2) && ($l1 < $l3) && ($l2 < $l3))  // Vérification de l'ordre alphabétique
{
    echo "Ordre alphabétique";

} else
{
    echo "Ordre non-alphabétique";
}