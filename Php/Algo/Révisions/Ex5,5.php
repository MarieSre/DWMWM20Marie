<?php

$nb = readline ("Entrer un nombre :");

 

for ($i = 1 ; $i <$nb ; $i++)
{
    $nb = $nb + $nb;
    $nb++;
    echo $nb;
}
