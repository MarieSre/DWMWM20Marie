<?php
//M.S

require "../FonctionsTableaux.php";

// Création du tableau
$longueur = demandeEntier("Quelle est la taille du tableau ? ");
$tab = creerTableauAvecTaille($longueur);

echo "\nTableau\n";
afficheTableau($tab);

// On parcourt le tableau en augmentant les valeurs
for($i = 0; $i < count($tab); $i++)
{
    $tab[$i]++;
}

// Affichage du tableau incrémenté
echo "\nTableau incrémenté\n";
afficheTableau($tab);

