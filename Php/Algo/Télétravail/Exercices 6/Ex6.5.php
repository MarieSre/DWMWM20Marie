<?php
// M.S 


// Cet algorithme créer et affiche un tableau de 6 cases contenant des nombres impairs

$n[0] = 1;

for($k = 1; $k < 6; $k++)
{
    $n[$k] = $n[$k - 1] +2;
}

for($i = 0; $i < 6; $i++)
{
    echo $n[$i]."\t";
}

// On peut le simplifier en regroupant les deux boucles

$n[0] = 1;      // Le premier chiffre du tableau est 1
echo $n[0]."\t";    // Affichage de la première case

// Affichage du tableau
for($k = 1; $k < 6; $k++)
{
    $n[$k] = $n[$k - 1] +2;
    echo $n[$k]."\t";
}
