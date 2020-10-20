<?php
// M.S

require "../FonctionsTableaux.php";

// Création du tableau
$longueur = demandeEntier("Quelle est la longueur du tableau ? ");
$tab = creerTableauAvecTaille($longueur);

// Fonction inversant les valeurs d'un tableau
$tab = array_reverse($tab);

// Affichage
afficheTableau($tab);