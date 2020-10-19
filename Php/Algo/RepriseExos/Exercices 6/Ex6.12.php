<?php
//M.S

require "../FonctionsTableaux.php";

// Création du tableau
$longueur = demandeEntier("Quelle est la taille du tableau ? ");
$tab = creerTableauAvecTaille($longueur);

// Affichage du tableau
echo "\nPremier tableau\n";
echo afficheTableau($tab);

// On augmente la valeur de chaque case du tableau
for($i = 0; $i < count($tab); $i++)
{
    $tab[$i]++;
}

// Affichage du tableau incrémenté
echo "\nNouveau tableau\n";
echo afficheTableau($tab);

