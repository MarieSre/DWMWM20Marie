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
for ($i = 0; $i < count($t); $i++) 
{
    for ($j = 0; $j < count($t); $j++) 
    {
        if (($max < $t[$i]) && $max < $t[$j])
        {
            $max = $tab[$i][$j];
            $pos = $i;
        }
    }
}

// Affichage
echo "\nLa plus grande valeur du tableau est : " . $max . ", elle se situe à la case " . $pos;


