<?php

// M.S

$nb = readline("Entrer un nombre : ");

do
{
    if($nb < 10)
    {
        echo "Plus grand !";
    }
    else
    {
        echo "Plus petit !";
    }
}while ($nb < 10 && $nb > 20);
