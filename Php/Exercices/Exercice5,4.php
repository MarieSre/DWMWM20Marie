<?php
/*M.S. Le but est de demander un nombre à l'utilisateur et d'afficher la table de multiplication de ce nombre.
On commence donc par s'assurer que l'utilisateur ne puisse pas rentrer de lettre */
do{
    $nb=readline("Veuillez entrer un chiffre à calculer et non une lettre :");
}   while (ctype_alpha($nb));//Grâce à cette fonction, l'utilisateur ne peut rentrer une lettre
    for ($i = 0; $i <= 10; $i++) { //Boucle affichant les tables de mutiplication jusqu'à x10
        echo "$nb x $i =";
        echo $nb * $i . "\n";
}
// 
