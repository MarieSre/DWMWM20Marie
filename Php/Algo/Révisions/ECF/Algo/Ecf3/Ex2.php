<?php
// M.S

// On boucle tant que la réponse est o
do{
    // Titre
    echo "Conversion de degrés Celcius en degrés Fahrenheit\n\n";

    $mini = readline("A partir de :");
    $max = readline("Jusqu'à : ");
    $pas = readline("Par pas de : ");

    // Affichage de la table de conversion
    echo "Table de conversion de degrés Celcius en degrés Fahrenheit\n\n";

    // On convertit les degrés pas à pas
    for($i = $mini; $i <= $max; $i += $pas)
    {
        // On définit le calcul de conversion
        $f = 9 / 5 * $i + 32;
        // Affichage
        echo $i. " = ". $f."\n";
    }
    // On demande si l'utilisateur souhaite continuer
    $editer = strtolower(readline("Souhaitez-vous éditer une autre table : "));
}while($editer == "o");
