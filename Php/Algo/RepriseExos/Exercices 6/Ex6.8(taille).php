<?php
// M.S

function creerTableauAvecTaille($tailleTableau) 
{
    for ($i=0;$i<$tailleTableau;$i++)
    {
        $tab[]=demandeEntier("Entrer une valeur :");
    }
    return $tab;
}

// Création de tableau
$tab = creerTableauAvecTaille(8);

$positif = 0;
$negatif = 0;

// Recherche du nombre de valeur négative et positive
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

echo afficheTableau($tab);
echo "Nombre de valeur(s) positive : ". $positif. "\n". "Nombre de valeur(s) négative : ". $negatif;