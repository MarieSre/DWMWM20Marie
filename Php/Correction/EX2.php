<?php

// Correction

echo "**** Table de multiplication ****\n";

do
{
    $nb = readline("Entrer le nombre pour lequel vous voulez la table de multiplication :"); // Saisi par l'utilisateur d'un nombre à multiplier.
    
    for ($i = 1; $i <= 10; $i++) // Boucle affichant les tables de multiplication jusqu'à 10.
    {
        echo $nb . "\t" . "x " . $i . "\t" . "= " . ($nb * $i) . "\n";
    }
    $cont = readline("Voulez vous continuer  (O/N) ?\n");
    
} while ($cont == "O"); 