<?php

// M.S

// Appel de la fonction demandeEntier
require "../FonctionsTableaux.php";

// Saisie de la température

$temp = demandeEntier("Quel est la température de l'eau ? ");

// On établie les différents états de l'eau
if ($temp < 0)      
{
    echo "Etat solide";
} else if ($temp > 100)
{
    echo "Etat gazeux";
}
else
{
    echo "Etat liquide";
}