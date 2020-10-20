<?php
// M.S

// Revenir sur l'exo sans regarder la correction

require "../FonctionsTableaux.php";

// Création du tableau
$longueur = demandeEntier("Quelle est la taille du tableau ? ");
$tab = creerTableauAvecTaille($longueur);

$valeur = 0;
do{
    $consecutif = false;
     for ($i = 0 ; $i < count($tab) ; $i++)
{
          $valeur++;
}
afficheTableau($tab);
if ($tab[$i] < $valeur )
    {
        echo "\nLes valeurs sont toutes consécutive\n";
    } else $tab[$i] = $tab[$i - 1]+1;
    {
        echo "\nLes valeurs ne sont pas toutes consécutive";
    }
} while($consecutif);
afficheTableau($tab);

// Correction


$tab = creerTableauAvecTaille(5);
$consec = true; // On initialise la variable à vrai
$i = 0;

// On regarde si la première valeur est plus petite que la seconde
if ($tab[0] < $tab[$i + 1]) { //Sens croissant
    $sens = 1;
} else {
    $sens = 0; //Evite une erreur undefined variable si le tableau est décroissant
}

do 
{
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
    echo "Le tableau est consécutif";
} 
else 
{
    echo "Le tableau n'est pas consécutif";
}