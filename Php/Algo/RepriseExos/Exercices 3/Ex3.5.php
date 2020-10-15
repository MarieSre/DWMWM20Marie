<?php
// M.S

$nb1 = readline("Entrer un premier nombre : "); // Saisi de deux nombres
$nb2 = readline("Entrer un second nombre : ");

if (($nb1 == 0) || ($nb2 == 0)) // Si les deux nombre sont égal à zéro
{
    echo "Leur produit est nul";
} else if (($nb1 > 0) xor ($nb2 > 0)) // S'ils sont supérieur à zéro . /*|| ($nb1 + $nb2 > 0) pour calculer le produit des deux nombres si l'un est négatif */
{
    echo "Leur produit est positif";
} else {
    echo "Leur produit est négatif";
}
