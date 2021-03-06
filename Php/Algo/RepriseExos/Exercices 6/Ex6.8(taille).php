<?php
// M.S

require "../FonctionsTableaux.php";

// Création de tableau
$longueur = demandeEntier("Quel est la taille du tableau ? ");
$tab = creerTableauAvecTaille($longueur);

$positif = 0;
$negatif = 0;

for($i = 0; $i < count($tab); $i++)
{
    if($tab[$i] > 0)
    {
        $positif++;
    }
    else
    {
        $negatif++;
    }
}

// Affichage

afficheTableau($tab);
echo "Nombre de valeur(s) positive : ". $positif. "\n". "Nombre de valeur(s) négative : ". $negatif;