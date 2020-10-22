<?php
//M.S

echo "****\t Table de multiplication ****\n";

// Création d'une/de plusieurs table(s) de multiplication
do 
{ 
    // Saisie d'un nombre à multiplier
    $nb = readline("Entrer le nombre pour lequel vous voulez la table de multiplication :"); 

    // Table de 1 à 10
    for ($i = 1; $i <= 10; $i++) 
    {
        echo $nb . "\t" . "x " . $i . "\t" . "= " . ($nb * $i) . "\n";
    }
    $cont = readline("Voulez vous continuer (O/N) ? ");
} while ($cont == "O");
