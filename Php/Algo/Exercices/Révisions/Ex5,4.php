<?php
//M.S

$nb = readline ("Entrer un nombre à multiplier :");

for ($i = 1 ; $i <= 10 ;$i++)
{
    echo $nb . "\t" . "x " . $i . "\t" . "= " . ($nb * $i) . "\n";
}