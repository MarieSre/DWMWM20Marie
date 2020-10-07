<?php

//M.S
require "FonctionsTableaux.php";

$nb = demandeEntier("Nombre de valeurs :");
$tab = creerTableauAvecTaille($nb);


for ($i = 0 ; $i < $nb -1 ; $i++)
{
    $mini = $tab[$i];
    $pos= $i;

    for ($j = $i +1 ; $j < $nb ; $j ++)
    {
        if ($tab[$j]<$mini)
        {
            $mini = $tab[$j];
            $pos = $j;
        }
    }

$tab[$pos] = $tab[$i];
$tab[$i] = $mini;

}
afficheTableau($tab);





/*$taille = 0;

for ($i = 0; $i < $taille - 1; $i++) 
{
    $mini = $tab[$i];
    $pos = $i;
    for ($j = $i + 1; $j < $taille; $j++) 
    {
        if ($tab[$j] < $mini) 
        {
            $mini = $tab[$j];
            $pos = $j;
        }

    }
    
$tab[$pos] = $tab[$i];
$tab[$i] = $mini;
}

for ($i = 0; $i < $taille; $i++) 
{
    echo $tab[$i] . "\t";
} */