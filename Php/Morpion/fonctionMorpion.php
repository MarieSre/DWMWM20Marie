<?php

/**
 *Renvoi le tableau mis à jour avec le symbole dans la case précisée par les positions
 * @param array $plateau    tableau de jeux à remplir
 * @param string $symbole   symbole choisi par chaque joueur
 * @param array $positions  la position du pion dans le plateau
 * @return array            renvoi le tableau une fois rempli
 */
function remplirTab($plateau, $symbole, $positions)
{
    $plateau[$positions[0]][$positions[1]] = $symbole;
    return $plateau;
}

// Main
// $t[0] = [".", ".", "."];
// $t[1] = [".", ".", "."];
// $t[2] = [".", ".", "."];

// $symbole = "X";
// $positions=[2,2];
// $t = remplirTab($t, $symbole, $positions);

// for ($i=0; $i <3 ; $i++) { 
//     for ($j=0; $j <3 ; $j++) { 
//         echo "|\t" .$t[$i][$j] ."\t|";
//     }
//     echo "\n|_______________||______________||______________|\n";
// }

/**
 * Détermine si le plateau est plein (aucune place disponible). Renvoi vrai si le plateau est plein, faux sinon
 * 
 * @param bool Si le plateau est rempli la partie s'arrête
 */

function plateauPlein($plateau)
{
    for ($i = 0; $i < count($plateau); $i++)
    {
        if (in_array(".", $plateau[$i]))
        {
            return false;
        }
    }
    return true;
}

//Main
//$plateau = [[1,2,3],[4,5,6],[7,8,"."]];
// $plateauRempli = false;
// for ($i = 0; $i < count($plateau); $i++)
// {
//   if(in_array(".", $plateau[$i]))
//   {
//     echo "Le plateau est plein, la partie est terminée.";
//     return true;
//   }
// }
// plateauPlein($plateau);


