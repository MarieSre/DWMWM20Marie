<?php
require "FonctionsTableaux.php"; // Appel des fonctions
$tab1 = creerTableauAvecTaille(8); //Crée le premier tableau de 8 cases
$tab2 = creerTableauAvecTaille(8); // } Crée le second tableaux de 8 cases

for ($i = 0; $i < 8; $i++) {
    $tab3[$i] = $tab1[$i] + $tab2[$i]; // Additione tab1 avec tab2
}
afficheTableau($tab1); // Affiche le premier tableau
afficheTableau($tab2); // Affiche le second tableau

for ($i = 0; $i < 8; $i++) {
    echo $tab3[$i] . "\t"; // Affiche le troisième tableau contenant la somme des valeurs de $tab1 et de $tab2
}
