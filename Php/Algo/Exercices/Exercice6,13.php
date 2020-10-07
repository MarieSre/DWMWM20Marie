<?php
//M.S 
require "FonctionsTableaux.php"; // Appel des fonctions
$nbr = demandeEntier("Combien de valeurs ? :");
$tab = creerTableauAvecTaille($nbr);

$maxi= $tab[0];
$position = 0;

for ($i = 0; $i < count($tab); $i++) //Recherche de la plus grande valeur
{ 
    if($maxi<$tab[$i])
    {
        $maxi = $tab[$i];
        $position = $i+1;
    }
}
afficheTableau($tab);
echo "\nLa plus grande valeur est $maxi, elle se trouve à la position " .$position;