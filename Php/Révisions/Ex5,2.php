<?php
// M.S

do {
    $nb = readline("Entrer un nombre :");       // Saisie d'un nombre
    if ($nb < 10) {
        echo "Plus grand !\n";      // Le nombre doit être entre 10 et 20
    } else if ($nb > 20) {          // Le nombre doit être entre 20 et 10
        echo "Plut petit !\n";
    }
} while (($nb < 10) || ($nb > 20));
echo "Nombre valide"; 
