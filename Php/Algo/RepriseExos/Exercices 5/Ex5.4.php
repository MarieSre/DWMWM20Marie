<?php
// M.S

// Saisie d'un nombre
$nb = readline("Entrer un nombre à multiplier :");

for($i = 1; $i <= 10; $i++)
{
    echo $nb . " x " . $i . " = ". $nb * $i."\n";  // Affichage des tables de multiplication
}