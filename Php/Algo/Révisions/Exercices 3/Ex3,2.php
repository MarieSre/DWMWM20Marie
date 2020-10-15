<?php
// M.S

// Saisie de deux nombre
$n1 = readline("Entrer un nombre : ");
$n2 = readline("Entrer un second nombre : ");

// On détermine s'ils sont positif ou négatif
if(($n1 >= 1) || ($n2 >= 1))
{
    echo "Le produit est positif";
}
else
{
    echo "Le produit est négatif";
}