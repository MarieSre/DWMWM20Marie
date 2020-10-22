<?php
// M.S

// Saisie d'une phrase
$phrase = ucfirst(readline("Ecrivez une phrase : "));

// Affichage du nombre de mots
echo "Il y a " .str_word_count($phrase). " mots dans cette phrase.";