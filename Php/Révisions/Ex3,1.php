<?php
//M.S

$nb = readline("Entrer un nombre :"); // Saisi d'un nombre

if ($nb < 0)   // Si $nb = -1 ou moins
{
    echo "Ce nombre est négatif"; // Ce nombre est négatif
} else if ($nb > 0)
{
    echo "Ce nombre est positif"; // Sinon il sera forcément positif
}