<?php
//M.S

echo "****\t Table de multiplication ****\n";

do {
    $nb = readline("Entrer le nombre pour lequel vous voulez la table de multiplication :"); // Saisie d'un nombre à multiplier
    for ($i = 1; $i <= 10; $i++) {
        echo $nb . "\t" . "x " . $i . "\t" . "= " . ($nb * $i) . "\n";
    }
    $cont = readline("Voulez vous continuer (O/N) ? ");
} while ($cont == "O");
