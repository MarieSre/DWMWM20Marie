<?php
// M.S

// Cet algorithme crée et affiche un tableau contenant 0  1  4  9  16

for($i = 0; $i < 5; $i++)
{
    $nb[$i] = $i * $i;
}
for($i = 0; $i < 5; $i++)
{
    echo $nb[$i]."\t";
}


// On peut le simplifier en ajoutant l'echo dans une seule boucle 

for($i = 0; $i < 5; $i++)
{
    $nb[$i] = $i * $i;
    echo $nb[$i]."\t";
}
