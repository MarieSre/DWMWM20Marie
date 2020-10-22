<?php
// M.S

// Appel des fonctions
require "../FonctionsTableaux.php";

// Création d'un tableau à deux dimension
$t = creerTableauMultiAvecRand(13, 9);

// Affichage du tableau
afficheTableauMulti($t);

$max = $t[0][0];
$pos = 0;

// On cherche la plus grande valeur du tableau
for ($i = 0; $i < 13; $i++)          // Lignes
{
    for ($j = 0; $j < 9; $j++)      // Colonnes
    {
        if ($max < $t[$i][$j])
        {
            $max = $t[$i][$j];
            $pos = $i. " ème ligne, ". $j ;
        }
    }
}

// Affichage de sa position
echo "\nLa plus grande valeur du tableau est : " . $max . ", elle se situe à la " . $pos. " ème colonne ";




