<?php
// M.S

// Création d'un tableau de 7 case
for($i = 0; $i < 7; $i++)
{
    $zero = readline("Entrer une valeur : ");
    $tab[$i] = 0;       // On met tout les chiffres à 0
}
// Affichage du tableau
for($i = 0; $i < 7; $i++)
{
    echo $tab[$i]."\t";
}