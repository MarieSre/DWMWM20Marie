<?php

//M.S

// Note à sois même : revenir sur l'exo pour le terminer
require "FonctionsTableaux.php"; //Appel des fonctions
$nbr = demandeEntier("Combien de valeurs ? :");
$tab = creerTableauAvecTaille($nbr); //Création d'un tableau de la en fonction du nombre de valeur saisis

/*for ($i = 0 ; $i < count($tab) ; $i++)
{
        if ($tab[0]>$tab[1])
        {
            $sens = "C";
        }
    if ($sens == "C")
    {
        $tab[$i] = $tab[$i - 1] -1;
    } else
    {
        $tab[$i = $tab[$i - 1]] +1;
    }
}
afficheTableau($tab);
echo $sens;*/


$valeur = 0;
do{
    $consecutif = false;
     for ($i = 0 ; $i < count($tab) ; $i++)
{
          $valeur++;
}
afficheTableau($tab);
if ($tab[$i] <$valeur )
    {
        echo "\nLes valeurs sont toutes consécutive\n";
    } else $tab[$i] = $tab[$i - 1]+1;
    {
        echo "\nLes valeurs ne sont pas toutes consécutive";
    }
}while($consecutif);

