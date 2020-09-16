<?php
$nb1 = readline("Ecrivez un nombre :");
$nb2 = readline("Ecrivez un nombre :");
if ($nb1 == 0 or $nb2 == 0) {
    echo "Le produit est nul";
} else if ($nb1 <= -1 && $nb2 > 0 or $nb1 > 0 && $nb2 < -1) {
    echo "Le produit est négatif";
} else if ($nb1 > 0 or $nb2 > 0 or $nb1 <= -1 or $nb2 <= -1) {
    echo "Le produit est positif";
} //Normallement, la machine ne devrait plus donner de réponse érronée à l'utilisateur grace à ctype_alpha
