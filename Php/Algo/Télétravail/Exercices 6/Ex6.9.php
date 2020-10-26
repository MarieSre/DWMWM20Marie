<?php
// M.S

require "../FonctionsTableaux.php";


// Création d'un tableau
$longueur = demandeEntier("Quelle est la taille du tableau ? ");
$tab = creerTableauAvecTaille($longueur);

// Affichage
afficheTableau($tab);

// Affichage de la somme des nombres du tableau
echo "\n". "La somme des valeurs du tableau est : ".array_sum($tab);