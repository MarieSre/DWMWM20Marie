<?php
// M.S

// Saisie du nombre de suffrage

$c1 = readline("Entrer le nombre de suffrage du premier candidat : ");
$c2 = readline("Entrer le nombre de suffrage du second candidat : ");
$c3 = readline("Entrer le nombre de suffrage du troisème candidat : ");
$c4 = readline("Entrer le nombre de suffrage du quatrième candidat : ");


if($c1 > 50)    // Les candidats sont élu dès le premier tour s'ils récoltent plus de 50 %
{
    echo "\nLe premier candidat est élu\n";
}
else if ($c1 < 12.5) // Les candidats sont éliminé dès le premier tour s'ils ne récoltent pas de 12.5 %
{
    echo "\nLe premier candidat est éliminé\n";
}
else if (($c2 > 50 ) || ($c3 > 50) || ($c4 > 50))   // Si les autres candidats récolte plus de 50 %
{
    echo "\nLe premier candidat est éliminé\n";
}
else if (($c1 > $c2) || ($c1 > $c3) || ($c1 > $c4)) // Si le premier candidat est en tête du second tour
{
    echo "\nLe premier candidat est en ballotage favorable\n";
}
else    // S'il n'est pas en tête du second tour
{
    echo "\nLe premier candidat est en ballotage défavorable";
}

// Tableau de variable
// c1 c2 c3 c4
// 60 2 20 30 élu
// 40 19 36 12 ballottage favorable
//  3 52 24 49 éliminé
// 14  9 27 48 ballottage défavorable
//  2 51 39 46 éliminé