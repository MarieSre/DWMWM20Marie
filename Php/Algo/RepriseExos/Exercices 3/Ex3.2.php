<?php
// M.S

$nb1 = readline("Entrer un premier nombre : ");
$nb2 = readline("Entrer un second nombre : ");

if (($nb1 >= 1) && ($nb2 >= 1)) {
    echo "Leur produit est positif";
} else {
    echo "Leur produit est négatif";
}
