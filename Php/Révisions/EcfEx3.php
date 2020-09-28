<?php
//M.S

echo "Racine de l'équation du second degré\n";
echo "Y= aX² + bX + c";

do {
    echo "\n";
    $a = readline("Quel est la valeur de a :");
    $b = readline("Quel est la valeur de b :"); // On définit $a , $b et $c
    $c = readline("Quel est la valeur de c :");
    echo "\n";

    if (($a == 0) && ($b == 0)) // On ne peut faire d'équation avec 0
    {
        echo "Ce n'est pas une équation";
    } else if ($a == 0) { // Esuation du premier degré
        echo "L'equation est du 1er degré !\n" . "L'équation s'annule pour x=-(c/b) :" . $x ."\n";
        $x = $c / $b;
    }
    else 
    {
       $delta = ($b * $b) - (4 * $a * $c); // On définit $delta
       if ($delta < 0)  // Equation sans réelle 
       {
           echo "L'équation ne possède pas de réelle:". "\n". "delta = ". $delta;
       }
       else if ($delta == 0) // Racine double
       {
            $x1 = ($b /(2 * $a));
           echo "L'équation possède une racine double :". "\n" . "delta = ". $delta . "\n". "x1 = x2 = ". $x1 ;
       }
       else if ($delta > 0) // Deux racines distincte
       {    
           $x1 = ((-$b + sqrt($delta))/2 * $a);
           $x2 = ((-$b - sqrt($delta))/2 * $a);
           echo "L'équation possède deux racines distincte :". "\n". "delta = ". $delta . "\n". "L'équation s'annule pour :". "\n". "x1 = ". $x1 . "\nx2 = ". $x2;
       }
    }
    echo "\n";
    $continuer = readline ("Voulez-vous continuer (O/N) ? ");
    echo "\n";
} while ($continuer == "O"); // On boucle tant que l'utilisateur désir continuer

// Conlusion

echo "Au revoir et à bientôt !";
