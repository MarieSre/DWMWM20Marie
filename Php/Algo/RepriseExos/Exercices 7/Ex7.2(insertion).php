<?php
// M.S

require "../FonctionsTableaux.php";

// Création d'un tableau avec des valeur aléatoire
$longueur = demandeEntier ("Quelle est la taille du tableau ? ");
$tab = creerTableauAvecRand($longueur);


// On parcourt le tableau à la recherche de la plus petite valeur
for ($i = 0; $i < count($tab); $i++) {
    $max = $tab[$i];
    $pos = $i;

    // On trie le tableau dans l'ordre décroissant
    for ($j = $i + 1; $j < count($tab); $j++) {
        if ($tab[$j] > $max) {
            $max = $tab[$j];
            $pos = $j;
        }
       
    }
    
$tab[$pos] = $tab[$i];
$tab[$i] = $max;
afficheTableau($tab);
}

// Ou rsort($tab);

afficheTableau($tab);

// Tableau de variable

// 6 21 39 29
// 39 21 6 29
// 39 29 6 21
// 39 29 21 6