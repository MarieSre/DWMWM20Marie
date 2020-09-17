<?php
$nb1 = readline("Entrer un premier nombre :");
$nb2 = readline("Entrer un second nombre :");
if ($nb1 == 0 or $nb2 == 0) {
    echo "Le produit est nul";
} else if ($nb1 <= -1 && $nb2 > 0 or $nb1 > 0 && $nb2 < -1) {
    echo "Le produit est négatif";
} else if ($nb1 > 0 or $nb2 > 0 or $nb1 <= -1 or $nb2 <= -1) {
    echo "Le produit est positif";
} //Note à sois même: essayer d'optimiser le programme sans faire de gros paté
