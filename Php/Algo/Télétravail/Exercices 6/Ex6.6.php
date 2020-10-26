<?php
// M.S

//Cet exercice reprend le principe de la Suite de Fibonacci

// Retranscription du pseudo code
$suite[0] = 1;
$suite[1] = 1;

// Création d'un tableau 
for($i = 2; $i < 7; $i++)
{
    $suite[$i] = $suite[$i - 1] + $suite [$i - 2];
}

// Affichage du tableau
for($i = 0; $i < 7; $i++)
{
    echo $suite[$i]."\t";
}
// Cela affichera 1  1  2  3  5  8  13