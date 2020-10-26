<?php
// M.S

do
{
    // Saisie d'un nombre
    $n = readline("Entrer un nombre : ");

    if($n < 10)
    {
        echo "\nPlus grand !\n";
    }
    else if ($n > 20)
    {
        echo "\nPlus petit !\n";
    }

}while ($n < 10 || $n > 20);

echo "\nCe nombre est valide";
