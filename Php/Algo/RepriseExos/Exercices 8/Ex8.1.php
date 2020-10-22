<?php
// M.S

// Création d'un tableau à deux dimension
for($i = 0; $i < 6; $i++) // Lignes
{
    for($j = 0; $j < 13; $j++) // Colonnes
    {
        $tab[$i][$j] = 0;   // On remplit le tableau de 0
        echo $tab[$i][$j]."\t"; // Affichage
    }
    echo "\n";
}
