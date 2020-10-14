<?php
//M.S

//Saisi d'un nombre

$nb = readline("Entrer un nombre : ");

for($i = 0; $i <= 9; $i++)  // Affichage des dix prochain nombres
{
    $nb++;      // Augmente de 1 à chaque tour jusqu'à 9
    echo $nb."\n";
}