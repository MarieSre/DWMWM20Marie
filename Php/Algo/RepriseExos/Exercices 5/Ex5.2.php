<?php

// M.S


do
{
    $nb = readline("Entrer un nombre : ");      // Saisie d'un nombre
    if($nb < 10)
    {
        echo "Plus grand !\n";      //Tant que le nombre est trop petit
    }
    else if ($nb > 20)
    {
        echo "Plus petit !\n";      //Tant que le nombre est trop petit
    }
}while ($nb < 10 || $nb > 20);

// Affichage
echo "Nombre valide";
