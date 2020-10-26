<?php
// M.S

// Création d'un tableau de 9 cases
for($i = 0; $i < 9; $i++)
{
    $note = readline("Entrer un nombre : ");
    $tab[$i] = $note;
    
}
// Affichage du tableau
for($i = 0; $i < 9; $i++)
{
    echo $tab[$i]. "\t";
}