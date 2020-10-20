<?php
// M.S

require "../FonctionsTableaux.php";

// Création du premier tableau
$taille1 = demandeEntier("Quelle est la taille du premier tableau ? ");
$tab1 = creerTableauAvecTaille($taille1);
// Création du second tableau
$taille2 = demandeEntier("Quelle est la taille du second tableau ? ");
$tab2 = creerTableauAvecTaille($taille2);

// Création du troisième tableau
for($i = 0; $i < count($tab1); $i++)
{
    $tab3[$i] = $tab1[$i] + $tab2[$i];  // On additione les deux tableaux
}

// Affichage des tableaux
echo "\n\tPremier tableau\n";
afficheTableau($tab1);

echo "\n\tSecond tableau\n";
afficheTableau($tab2);

echo "\n\tTroisème tableau\n";
afficheTableau($tab3);