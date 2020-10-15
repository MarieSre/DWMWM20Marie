<?php
// M.S

function creerTableauTermineParZero()
{
    do{
        $nb = demandeEntier("Entrer une valeur :");
        if ($nb != 0 ) //evite que le dernier 0 entre dans le tableau
        {
            $tab[]=$nb;
        }
    }
    while ($nb != 0 );
    return $tab;
}

// Création de tableau
$tab = creerTableauTermineParZero();

$positif = 0;
$negatif = 0;

// Recherche du nombre de valeur positive et négative
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
echo "Valeur(s) positive : ". $positif. "\n". "Valeur(s) négative : ". $negatif;
