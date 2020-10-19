<?php

// M.S

// Affichage de l'entête
echo " **** Les nombres premiers ****\n\n";

// Saisie des nombres
$inf = readline("Entrer la borne inférieure : ");
$sup = readline("Entrer la borne supérieure : ");
echo "\n";

for($i = $inf; $i < $sup; $i++)
{
    $div = 2;   // On test le diviseur
    while(($i % $div ) != 0 && $div < $i)
    {
        $div++;
    }
        if($div == $i)
        {
            echo $i. " est premier\n";  // Un nombre premier n'est divisibl
        }
}