<?php
// M.S

// On répète tant que la réponse est o
do
{
    // Saisie des nombres
    $ad = readline("Quel est la valeur de AD ? ");
    $ae = readline("Quel est la valeur de AE ? ");
    $eb = readline("Quel est la valeur de EB ? ");

    // On calcul la longueur de AB
    $ab = sqrt(($ae * $ae) + ($eb * $eb));

    // Calcul du périmètre
    $perimetre = $ab + ($ad*2) + $ae + $eb;

    // On défnit les variable pour la surface
    $rectangle = $ae * $ad;
    $triangle = ($ae * $eb) / 2;

    // Calcul de la surface
    $surface = $rectangle + $triangle;

    // Affichage
    echo "Le périmètre est de :\t". $perimetre. "\n";
    echo "La surface est de :\t". $surface. "\n";

    $cont = strtolower(readline("Voulez vous faire un autre calcul ? "));
} while ($cont == "o");

