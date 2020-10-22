<?php
// M.S
require "../FonctionsTableaux.php";

// Saisie de 5 nombres
$tab = creerTableauAvecTaille(5);

// Affichage de la somme
echo "La somme de ces nombres est ". array_sum($tab);