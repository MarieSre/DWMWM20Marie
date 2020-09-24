<?php

$nb1 = readline ("Entrer un premier nombre :"); // Saisi de deux nombres par l'utilisateur
$nb2 = readline ("Entrer un second nombre :");

if  (($nb1 == 0) || ($nb2 == 0))  // SI l'utilisateur rentre 0, le produit sera nul
{
    echo "Le produit est nul";

} else if (($nb1 <= 0) || ($nb2 < 0)) // Si l'un des deux nombres est négatif, alors leur produit sera négatif
{
    echo "Le produit est négatif";

}  else 
{
    echo "Le produit est positif";
}
