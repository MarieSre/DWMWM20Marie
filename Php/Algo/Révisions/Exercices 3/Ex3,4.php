<?php

// M.S

// Saisie de trois nombres
$n = readline("Entrer un nombre : ");

// On vérifie la nature du nombre
if($n == 0)
{
    echo "Ce nombre est nul";
}
else if ($n > 0)
{
    echo "Ce nombre est positif";
}
else    // Sinon il est forcément négatif
{
    echo "Ce nombre est négatif";
}