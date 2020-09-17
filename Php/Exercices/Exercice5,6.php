<?php
//M.S Le but est d'afficher la factiorielle d'un chiffre
    do{
        $nb=readline("Veuillez entrer un chiffre et non une lettre :");
    }   while(ctype_alpha($nb));
        $multi=1;
        for ($fact=1 ; $fact<=$nb ; $fact++){
        $multi=$multi*$fact;                                         //La variable multi calculera la factorielle du chiffre donné
        }
        echo "La factorielle de $nb est = $multi\n";                //Cela affichera le détail de la factorielle soit 1x2x3 etc