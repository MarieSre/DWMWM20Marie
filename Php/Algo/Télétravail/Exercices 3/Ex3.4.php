<?php
// M.S

// Saisie d'un nombre
$n1 = readline("Entrer un nombre : ");

// On test s'il est positif, négatif ou nul
if ($n1 == 0)
{
    echo "Ce nombre vaut zéro\n";
}
else if ($n1 > 0)
{
    echo "Ce nombre est positif\n";
}
else
{
    echo "Ce nombre est négatif\n";
}