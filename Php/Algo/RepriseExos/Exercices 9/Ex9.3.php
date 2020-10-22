<?php
// M.S

// V1

// Saisie d'une phrase
$phrase = readline("Ecrivez une phrase : ");

$voyelles = ["A","E","I","O","U","Y","a","e","i","o","u","y"];

foreach(count_chars($voyelles, 1) as $i => $phrase)
{
    echo "Il y a ". $phrase. " voyelles dans la phrase.";
}
// Revenir sur l'exo