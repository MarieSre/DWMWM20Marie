<?php

require "FonctionsTableaux.php";

function creerTableauAvecRand($tailleTableau) // Génère des valeurs aléatoire
{
    for ($i = 0; $i < $tailleTableau; $i++) {
        $tab[] = rand(1, 100);
    }
    return $tab;
}

$nb = demandeEntier("taille du tableau : ");

$tab = creerTableauAvecRand($nb);

do {
    $yapermut = false;

    for ($i = 0; $i < count($tab) - 1; $i++) {
        if ($tab[$i] > $tab[$i + 1]) {
            $temps = $tab[$i];
            $tab[$i] = $tab[$i + 1];
            $tab[$i + 1] = $temps;
            $yapermut = true;
        }
    }

} while ($yapermut);

afficheTableau($tab);
