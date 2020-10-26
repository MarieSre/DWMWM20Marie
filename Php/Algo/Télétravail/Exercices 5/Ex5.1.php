<?php
// M.S 

// Saisie d'un nombre entre 1 et 3

do{
    $n = readline("Entrer un nombre : ");
    if(($n < 1) || ($n > 3))
    {
        echo "Veuillez entrer un nombre compris entre 1 et 3\n";      
    }
    else
    {
        echo "\nCe nombre est valide";

    }
    
}while ($n < 1 || $n > 3);
