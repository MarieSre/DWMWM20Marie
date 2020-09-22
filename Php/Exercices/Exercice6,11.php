<?php
//M.S Le but de cette exercice est de multiplier les entrées du second tableau par celles du premier et de les additioner
require "FonctionsTableaux.php"; // Appel des fonctions
$ent1 = demandeEntier("Entrer la taille du premier tableau :" );
$tab1 = creerTableauAvecTaille(4); // Crée un tableau de quatre entrées

$ent2 = demandeEntier("Entrer la taille du second tableau :" );
$tab2 = creerTableauAvecTaille(2); // Crée un tableau de trois entrées

$schtr = 0; // schtr = Schtroumpf

for ($i = 0; $i < count($tab1); $i++) // Boucle parcourant le premier tableau
{ 
    for ($j = 0; $j < count($tab2); $j++) // Boucle parcourant le second tableau
    { 
        $schtr += $tab1[$i] * $tab2[$j]; // Calcul le schtr 
    }
}
/* $schtr = $tab2[$j] * $tab1[$j];*/

echo " \nPremier tableau : \n";
afficheTableau($tab1); // Affiche le premier tableau

echo "\nSecond tableau : \n";
afficheTableau($tab2); // Affiche le second tableau

echo "Le Schtroumpf des deux tableaux est de :" . $schtr . "\n";
