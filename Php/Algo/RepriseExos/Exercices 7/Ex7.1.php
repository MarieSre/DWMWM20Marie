<?php
// M.S

require "../FonctionsTableaux.php";

// Création du tableau
$longueur = demandeEntier("Quelle est la taille du tableau ? ");
$tab = creerTableauAvecTaille($longueur);

// On initialise le flag à "vrai / 1"
$consec = true;
$i = 0;

//On regarde si première la valeur est plus petite que la seconde
if ($tab[0] < $tab[$i + 1])
{
    // Sens croissant
    $sens = 1;
}
else
{
    $sens = 0;      // Evite une erreur si le tableau est décroissant
}

do {
    // On initialise le flag à "faux / 0"
    $consec = false;
    if ($sens == 1)
    {
        // Ordre croissant
        if ($tab[$i] +1 == $tab [$i +1])
        {
            $i += 1;
            $consec = true;
        }
    }
    else
    {
        // Ordre décroissant
        if ($tab[$i] -1 == $tab[$i + 1])
        {
            $i += 1;
            $consec = true;
        }
    }
} while ($consec && $i < count($tab) -1);

if ($consec == true)
{
    echo "\nLes éléments sont tous consécutifs";
}
else
{
    echo "\nLes éléments ne sont pas tous consécutifs";
}