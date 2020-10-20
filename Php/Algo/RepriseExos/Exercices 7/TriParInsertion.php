<?php

require "../FonctionsTableaux.php";

$tab = [10, 30, 40, 5, 20];

// On parcourt le tableau à la recherche de la plus petite valeur
for ($i = 0; $i < count($tab); $i++) {
    $mini = $tab[$i];
    $pos = $i;

    // On trie le tableau dans l'ordre croissant
    for ($j = $i + 1; $j < count($tab); $j++) {
        if ($tab[$j] < $mini) {
            $mini = $tab[$j];
            $pos = $j;
        }

    }
    
$tab[$pos] = $tab[$i];
$tab[$i] = $mini;

}

afficheTableau($tab);