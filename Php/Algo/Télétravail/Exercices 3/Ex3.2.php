<?php
// M.S

// Saisie de deux nombres
$n1 = readline ("Entrer un premier nombre : ");
$n2 = readline ("Entrer un second nombre : ");

// On test si les nombres sont positif ou négatif
if(($n1 > 0) || ($n2 > 0))
{
    echo "Leur produit est positif";
}
else
{
    echo "Leur produit est négatif";
}