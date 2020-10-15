<?php
// M.S

// On définit les tableaux
$avion = ["BOING747", "AIRBUSA380", "LEARJET45", "DC10", "CONCORDE", "ANTONOV32"];
$codeAvion = ["BO", "AB", "LJ", "DC", "CO", "AN"];
$vitesse = [800, 950, 700, 900, 1400, 560];
$rayon = [10000, 12000, 4500, 8000, 16000, 2500];

echo "**** STATISTIQUES AVIONS ****\n";

do {
    $code = strtoupper(readline ("Veuillez renseigner le code de l'avion : "));
    for ($i = 0; $i < count($codeAvion); $i++)  // On recherche l'avion selon son codeS
    {
        if ($code == $codeAvion[$i])
        {
        echo "Avion : ". $avion[$i] . "\nVitesse : " . $vitesse[$i] . "\nRayon d'action : " . $rayon[$i]."\n"; // Affichage de l'avion
        }
    }
    if (!$codeAvion){ // Si le code n'est pas renseigné dans la base de données
        echo "Désolé, cet avion n'est pas renseigné";
    }
    $recherche = strtoupper(readline ("Voulez-vous effectuer une autre recherche (O/N) :"));

} while ($recherche == strtoupper("O")); // On boucle tant que la réponse est O


do {
    $plusRapide = 0;
    for ($i = 0; $i < count($vitesse); $i++) // On effectue un calcul pour déterminerquel est l'avion le plus rapide
    {
        if ($vitesse [$i] > $vitesse[$plusRapide])
        {
            $plusRapide = $i;
        }
    }
    $stats = strtoupper(readline("Voulez vous éditer les statistiques (O/N) ? "));
    
    if ($stats == strtoupper("O"))
    {
        echo "L'avion qui vole le plus vite est le ". $avion[$plusRapide] ." car il vole à " . $vitesse[$plusRapide]. " km/h \n"; // Affichage du plus rapide
        $moyenne = array_sum($rayon)/count($rayon);
        echo "La moyenne des rayons d'action est de : ". $moyenne."\n"; // Affichage de la moyenne des rayons d'actions
    }
} while ($stats == strtoupper("O"));

// Conclusion

echo "Au revoir et à bientôt";
