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

// Création de deux tableaux
$tab1 = creerTableauAvecTaille(8);
$tab2 = creerTableauAvecTaille(8);

// Création du troisième tableau
for($i = 0;$i < 8; $i++)
{
    $tab3[$i] = $tab1[$i] + $tab2[$i];  // Addition des deux précédent tableaux
}

// Affichage
echo afficheTableau($tab1);
echo afficheTableau($tab2);
echo afficheTableau($tab3);