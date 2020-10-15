<?php
// M.S

// Appel des fonctions
require "../FonctionsTableaux.php";

// Création d'un tableau
$tab = creerTableauAvecTaille(8);

// Affichage
echo afficheTableau($tab);

// Affichage de la somme des nombres du tableau
echo "\n".array_sum($tab);