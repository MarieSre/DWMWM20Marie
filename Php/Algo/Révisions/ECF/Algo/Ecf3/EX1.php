<?php
// M.S

// On répète tant que la réponse est o
do{
    // Saisie des valeurs
    $ad = readline("Quel est la valeur de AD ? ");
    $ae = readline("Quel est la valeur de AE ? ");
    $eb = readline("Quel est la valeur de EB ? ");

    // On calcul la racine carré
    $ab = sqrt(($ae * $ae) +($eb * $eb));
    // Calcul du périmètre
    $perimetre = ($ad * 2)+ $ae + $eb + $ab;

    // Calcul de la surface du polygone
    $rectangle = $ae * $ad;
    $triangle = ($ae * $eb) / 2;

    $surface = $rectangle + $triangle;

    // Affichage
    echo "Le périmètre est de :\t". $perimetre. "\nLa surface est de :\t". $surface."\n";
    // On demande si l'utilisateur souhaite continuer
    $nouveau = strtolower(readline("Vouslez vous faire un autre calcul ? "));

}while($nouveau == "o");
