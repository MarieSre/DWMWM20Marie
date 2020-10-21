<?php
// M.S

require "../FonctionsTableaux.php";

// Création du tableau
$longueur = demandeEntier("Quelle est la longueur du tableau ? ");
$tab = creerTableauAvecRand($longueur);

// Affichage du tableau
echo"\n\tTableau\n";
afficheTableau($tab);

// Fonction inversant les valeurs d'un tableau
$tab = array_reverse($tab);

// Affichage du tableau inversé
echo "\n\tTableau inversé\n";
afficheTableau($tab);