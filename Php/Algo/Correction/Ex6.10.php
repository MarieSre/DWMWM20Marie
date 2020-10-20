<?php
// M.S

require "../FonctionsTableaux.php";

$taille = demandeEntier("Quelle est la taille des tableaux ? ");
// Création de deux tableaux
echo "\nRemplissage du premier tableau : \n";
$tab1 = creerTableauAvecTaille(8);
echo "\nRemplissage du second tableau : \n";
$tab2 = creerTableauAvecTaille(8);

// Création du troisième tableau
for($i = 0;$i < 8; $i++)
{
    $tab3[$i] = $tab1[$i] + $tab2[$i];  // Addition des deux précédent tableaux
}

// Affichage
echo "\n\tPremier tableau\n";
afficheTableau($tab1);

echo "\n\tSecond tableau\n";
afficheTableau($tab2);

echo "\n\tTroisème tableau\n";
afficheTableau($tab3);