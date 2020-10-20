<?php
// M.S

require "../FonctionsTableaux.php";

// Création d'un tableau
$tab = [12, 8, 4, 45, 64, 9, 2];

// On demande quel indice il faut supprimer
$indice = readline ("Quel indice voulez vous supprimer ? ");

// On supprime un seul indice du tableau
array_splice($tab, $indice,1);

afficheTableau($tab);