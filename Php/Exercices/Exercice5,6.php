<?php
$f=readline("Entrer un nombre à calculer :\n");
    while(ctype_alpha($f)){
        $a=readline("Veuillez entrer un chiffre et non une lettre :");
        for ($fact=1 ; $fact<=$f ; $fact++){
        $multi=$multi*$fact;
    }
        echo "La factorielle de $f est $fact \n";
}