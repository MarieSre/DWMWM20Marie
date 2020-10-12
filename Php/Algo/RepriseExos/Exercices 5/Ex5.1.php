<?php
// M.S

//Saisie d'un nombre compris entre 1 et 3

$nb = readline("Entrer un nombre : ");

do
{
    if (($nb < 1) || ($nb > 3))
    {
        echo "Veuillez entrer un nombre compris entre 1 et 3\n";
        $nb = readline("Entrer un nombre : ");
    }
    else 
    {
        echo "Nombre valide";
    }
} while ($nb < 1 || $nb > 3); 