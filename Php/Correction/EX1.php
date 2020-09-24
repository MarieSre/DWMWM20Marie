<?php

// Correction

do 
{
    $rayon = readline("Quel est le rayon du cercle :"); // Saisi du rayon par l'utilisateur
    $circonference = 2 * 3.14 * $rayon; // Circonférence = 2 x pi x rayon
    $surface = 3.14 * ($rayon * $rayon); // Surface = pi x rayon²

    echo "Sa circonférence est de :  $circonference\n";
    echo "Sa surface est de :  $surface \n";

    $nouveauCalcul = readline("Voulez-vous faire un autre calcul (O/N) : \n");

} while ($nouveauCalcul == "O") ;
echo "Au revoir et à bientôt";