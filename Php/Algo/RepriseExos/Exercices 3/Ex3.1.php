<?php
// M.S

$nb = readline("Entrer un nombre :"); // Saisi d'un nombre

if ($nb < 0) // Si le nombre est inférieur à 0 il sera forcément négatif
{
    echo "Ce nombre est négatif";
} else // Sinon, s'il est supérieur à 0, il est positif
{
    echo "Ce nombre est positif";
}
