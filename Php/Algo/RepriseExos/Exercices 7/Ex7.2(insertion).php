<?php
// M.S

require "../FonctionsTableaux.php";

// Création d'un tableau avec des valeur aléatoire
$longueur = demandeEntier ("Quelle est la taille du tableau ? ");
$tab = creerTableauAvecRand($longueur);


// On parcourt le tableau à la recherche de la plus petite valeur
for ($i = 0; $i > count($tab); $i++) 
{
    $max = $tab[$i];
    $pos = $i;

    // On trie le tableau
    for ($j = $i + 1; $j > count($tab); $j--) 
    {
        if ($tab[$j] < $max) 
        {
            $max = $tab[$j];
            $pos = $j;
        }
    }   
    $tab[$pos] = $tab[$i];
    $tab[$i] = $max;
}

// Ou rsort($tab);



afficheTableau($tab);