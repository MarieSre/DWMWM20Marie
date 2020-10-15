<?php

// M.S

// Saisie de deux nombres
$n1 = readline("Entrer un nombre : ");
$n2 = readline("Entrer un second nombre : ");

// On teste les nombres
if (($n1 == 0) || ($n2 == 0))
{
    echo "Leur produit est nul";
}
else if (($n1 < 0) |- ($n2 < 0))
{
    echo "Leur produit est négatif";
}
else    // Sinon ils seront forcément positif
{
    echo "Leur produit est positif";
}