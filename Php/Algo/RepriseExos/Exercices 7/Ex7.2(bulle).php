<?php
// M.S

require "../FonctionsTableaux.php";

// Création d'un tableau avec un nombre de valeurs aléatoire
$longueur = demandeEntier("taille du tableau : ");
$tab = creerTableauAvecRand($nb);

// On boucle tant que le tableau n'est pas trié
do {
    $trier = false;     // On initialise le flag a faux

    for ($i = 0; $i < count($tab) - 1; $i++)  // On parcourt le tableau
    {
        if ($tab[$i] < $tab[$i + 1]) // On vérifie que la valeur N est supérieur à N -1
        {
            $temps = $tab[$i];                  // On stock temporairement une valeur
            $tab[$i] = $tab[$i + 1];            // On renplace la valeur N par N +1
            $tab[$i + 1] = $temps;              // On remplace la valeur N + 1 par la valeur temporaire
            $trier = true;                      // On initialise le flag à vrai pour relancer la boucle
        }
    }

} while ($trier);

// Affichage
afficheTableau($tab);