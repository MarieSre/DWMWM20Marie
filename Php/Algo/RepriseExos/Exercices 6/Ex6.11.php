<?php
// M.S

require "../FonctionsTableaux.php";

// Saisie de la taille du premier tableau
$longueur1 = demandeEntier("Quelle est la taille du tableau ?");
$tab1 = creerTableauAvecTaille($longueur1);

// Saisie de la taille du second tableau
$longueur2 = demandeEntier("Quelle est la taille du tableau ?");
$tab2 = creerTableauAvecTaille($longueur2);

$sch = 0;

// On calcul le schtroumpf en parcourant les deux tableaux
for($i = 0; $i < count($tab1); $i++)
{
    for($j = 0;$j < count ($tab2); $j++)
    {
        $sch += $tab1[$i] * $tab2[$j]; 
    }
}


// Affichage
echo "\nPremier Tableau\n";
echo  afficheTableau($tab1);
echo "\nSecond Tableau\n";
echo  afficheTableau($tab2);
echo "Le schtroumpf est de : ". $sch;