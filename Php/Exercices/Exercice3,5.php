<?php
$nb1 = readline("Ecrivez un nombre :");
$nb2 = readline("Ecrivez un nombre :");
if (ctype_alpha($nb1)) {
    echo "Veuillez entrer un nombre et non une lettre.";
} else if (ctype_alpha($nb2)) {
    echo "Veuillez entrer un nombre et non une lettre.";
} else if ($nb1 == 0 & $nb2 == 0) {
    echo "Le produit est nul";
} else if ($nb1 > 0 & $nb2 > 0) {
    echo "Le produit est positif";
} else {
    echo "Le produit est négatif";
} //Normallement, la machine ne devrait plus donner de réponse érronée à l'utilisateur grace à ctype_alpha
