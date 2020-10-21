<?php
// M.S


require "../FonctionsTableaux.php";

// Création du tableau
$longueur = demandeEntier("Quelle est la taille du tableau ? ");
$tab = creerTableauAvecTaille($longueur);

$consec = true; // On initialise la variable à vrai
$i = 0;

// On regarde si la première valeur est plus petite que la seconde
if ($tab[0] < $tab[$i + 1]) 
{ //Sens croissant
    $sens = 1;
} 
else 
{
    $sens = 0; //Evite une erreur undefined variable si le tableau est décroissant
}

do {
    $consec = false;
    if ($sens == 1)
    { 
        if ($tab[$i] + 1 == $tab[$i + 1]) // Si c'est dans l'ordre croissant
        {
            $i += 1;
            $consec = true;
        }
    } 
    else 
    { 
        if ($tab[$i] - 1 == $tab[$i + 1]) // Si c'est dans l'ordre décroissant
        {
            $i += 1;
            $consec = true;
        }
    }
} while ($consec && $i < count($tab) - 1);

//conclusion
if ($consec == true) 
{
    echo "\nLe tableau est consécutif";
} 
else 
{
    echo "\nLe tableau n'est pas consécutif";
}