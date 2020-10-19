<?php
// M.S

// On boucle tant que la réponse est o
do
{
    // Titre
    echo "Conversion de degrés Celcius en degrés Fahrenheit\n\n";

    $celcius = readline("A partir de : ");
    $n2 = readline ("Jusqu'à : ");
    $pas = readline("Par pas de : ");

    echo "Table de conversion de degrés Celcius en degrés Fahrenheit\n\n";

    // On convertit les degrés pas à pas
    for($i = $celcius; $i <= $n2; $i += $pas)
    {
        // On calcul les degrés Fahrenheit
        $f = 9 / 5 * $i + 32;
        echo $i . " =  ". $f."\n";  
       
    }

    $editer = strtolower(readline("Souhaitez-vous éditer une autre table : "));
}while ($editer == "o");

