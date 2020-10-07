<?php
//M.S Le but est d'afficher la factorielle d'un chiffre
do {
    $nb1 = readline("Veuillez entrer un chiffre et non une lettre :");
} while (ctype_alpha($nb)); // Obligation de rentrer un chiffre

$facto = 1;
echo "1"; /*Calculer la factorielle*/
for ($nb2 = 2; $nb2 <= $nb1; $nb2++) {
    echo " x ", $nb2;
    $facto = $nb2 * $facto;
}
echo " = " . $facto; //La console affichera 1x2x ....
