<?php
// M.S

// Saisie de deux nombres
$n1 = readline("Entrer un premier nombre : ");
$n2 = readline("Entrer un second nombre : ");

// On test le produit des nombres sans le calculer
if (($n1 == 0) || ($n2 == 0))
{
    echo "Le produit est nul";
}
else if (($n1 > 0) || ($n2 > 0))
{
    echo "Le produit est positif";
}
else
{
    echo "Le produit est négatif";
}