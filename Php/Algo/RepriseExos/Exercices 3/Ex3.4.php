<?php
// M.S

$nb = readline("Entrer un nombre : "); // Saisi d'un nombre

if ($nb == 0) // Si ce nombre est égal à zéro, alors il est nul
{
    echo "Ce nombre est nul";
} elseif ($nb > 0) // Si ce nombre est plus grand que zéro
{
    echo "Ce nombre est positif";
} else // Sinon, c'est un noimbre négatif
{
    echo "Ce nombe est négatif";
}
