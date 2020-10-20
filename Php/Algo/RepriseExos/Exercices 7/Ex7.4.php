<?php
// M.S

require "../FonctionsTableaux.php";

// Création d'un tableau
$tab = [12, 8, 4, 45, 64, 9, 2];

array_splice($tab, 1,1);

afficheTableau($tab);