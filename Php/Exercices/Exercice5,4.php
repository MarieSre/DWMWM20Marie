<?php
$nb = readline("Table de :");
for ($i = 0; $i <= 10; $i++) { //Boucle affichant les tables de mutiplication jusqu'à x10
    echo "$nb x $i =";
    echo $nb * $i . "\n";
}
// Note à sois même: Réessayer d'implémenter la fonction ctype_alpha
