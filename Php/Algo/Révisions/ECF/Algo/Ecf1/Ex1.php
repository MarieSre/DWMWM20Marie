<?php
// M.S

echo "\t CALCUL D'UN CERCLE\n";

do {
    
    // Saisie du rayon
    $rayon = readline("Quel est le rayon du cercle :\n");
    $circonference = 2 * 3.14 * $rayon;
    $surface = 3.14 * ($rayon * $rayon);

    // Affichage des résulats

    echo "Sa circonférence est de\t:" . $circonference . "\n";
    echo "Sa surface est de\t:" . $surface . "\n";

    $reponse = readline("Voulez-vous faire un autre calcul (O/N) :"); // Le programme se relancera tant que l'utilisateur répondra "oui"

} while ($reponse == "O");

if ($reponse == "N") 
{
    echo "Au revoir et à bientôt"; // Le programme se terminera si l'utilisateur répond "non"
}
