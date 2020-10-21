<?php
// M.S

// require "../FonctionsTableaux.php";

// $max = $tab[0];
// $pos = 0;
// // Création d'un tableau de 13 sur 9
// for($i = 0; $i < 13; $i++)
// {
//     for($j = 0; $j < 9; $j++)
//     {
//         $tab[$i][$j] = creerTableauAvecRand($t);
//          if($max < $tab[$i] && $max < $t[$j])
//          {
//              $max = $t[$i][$j];
//              $pos = $i . $j;
//          }
//     }
// }



/**
 * Crée un tableau multidimensionnel contenant des valeurs aléatoire
 * rand : génère une valeur aléatoire
 * return : renvoi le tableau rempli
 */
function creerTableauMultiAvecRand($nombreDeLigne, $nombreDeColonne) // Génère des valeurs aléatoire
{
    for ($i = 0; $i < $nombreDeLigne; $i++) 
    {
        for ($j = 0; $j < $nombreDeColonne; $j++)
        {
            $tab[$i][$j]=rand(1,100);
        }
        echo "\n";
    }
    return $tab;
}


/**
 * Affiche un tableau multidimensionnel
 */
function afficheTableauMulti($tab)
{

    for($i = 0; $i < 6; $i++) // Lignes
    {
        for($j = 0; $j < 13; $j++) // Colonnes
        {
            echo $tab[$i][$j]."\t"; // Affichage
        }
    echo "\n";
    }
}


$t = creerTableauMultiAvecRand(13, 9);

for($i = 0; $i < $t; $i++)
{
    for($j = 0; $j < $t; $j++)
    {
        echo $t[$i][$j]."\t";
    }
    echo "\n";
}
