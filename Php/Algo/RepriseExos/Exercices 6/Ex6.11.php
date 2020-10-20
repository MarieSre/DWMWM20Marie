<?php
// M.S

require "../FonctionsTableaux.php";

// Création du premier tableau
$longueur1 = demandeEntier("Quelle est la taille du premier tableau ? ");
$tab1 = creerTableauAvecTaille($longueur1);

// Création du second tableau
$longueur2 = demandeEntier("Quelle est la taille du second tableau ? ");
$tab2 = creerTableauAvecTaille($longueur2);

$sch = 0;

// Calcul du schtroumpf
for($i = 0; $i < count($tab1); $i++)
{
    for($j = 0; $j < count($tab2); $j++)
    {
        $sch += $tab1[$i] * $tab2[$j];
    }
}

// Affichage
echo "\nPremier Tableau\n";
afficheTableau($tab1);
echo "\nSecond Tableau\n";
afficheTableau($tab2);
echo "Le schtroumpf est de : ". $sch;