<?php

// M.S

do
{
    $nb = readline("Entrer un nombre : ");
    if($nb < 10)
    {
        echo "Plus grand !\n";
    }
    else if ($nb > 20)
    {
        echo "Plus petit !\n";
    }
}while ($nb < 10 || $nb > 20);
echo "Nombre valide";
