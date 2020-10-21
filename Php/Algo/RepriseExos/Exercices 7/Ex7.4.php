<?php
// M.S

require "../FonctionsTableaux.php";

// Création d'un tableau

// V1
$tab = [12, 8, 4, 45, 64, 9, 2, 14];    // Tableau simple
// $tab = [0 => 12, 1 => 8, 2 => 4, 3 => 45, 4 => 64, 5 => 9, 6 => 2, 7 => 14]; // Tableau associatif

// V2
// $longueur = demandeEntier("Quelle est la taille du tableau ? ");
// $tab = creerTableauAvecRand($longueur);

// Affichage du tableau
echo "\tTableau\n";
afficheTableau($tab);
// afficheTableauAssoc($tab);

// On demande quel indice il faut supprimer
$indice = readline("Quel indice voulez vous supprimer ? ");

// On supprime un seul indice du tableau
array_splice($tab, $indice, 1);

// Affichage du nouveau tableau tableau 
echo "\n\tNouveau tableau\n";
afficheTableau($tab);
// afficheTableauAssoc($tab);
