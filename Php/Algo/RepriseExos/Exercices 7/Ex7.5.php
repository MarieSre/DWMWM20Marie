<?php
// M.S

require "../FonctionsTableaux.php";

// Création d'un tableau
$dico = [0 => "Pomme", 1 => "Banane", 2 => "Kiwi", 3 => "Citron", 4 => "Tomate", 5 => "Mangue"]; // Tableau associatif
// $dico = ["Pomme", "Banane", "Kiwi", "Citron", "Tomate", "Mangue"];   // Tableau simple

// Triage du tableau
// On boucle tant que le tableau n'est pas trié
do {
    $trier = false;     // On initialise le flag a faux / 0

    for ($i = 0; $i < count($dico) - 1; $i++)  // On parcourt le tableau
    {
        if ($dico[$i] > $dico[$i + 1])  // On vérifie que la valeur N est supérieur à N -1
        {
            $temps = $dico[$i];                    // On stock temporairement une valeur
            $dico[$i] = $dico[$i + 1];            // On renplace la valeur N par N +1
            $dico[$i + 1] = $temps;              // On remplace la valeur N + 1 par la valeur temporaire
            $trier = true;                      // On initialise le flag à vrai / 1 pour relancer la boucle
        }
    }
} while ($trier);

// V2
// $dico = asort($dico);

// Test
// afficheTableau($dico);
// afficheTableauAssoc($dico);

$mot = ucfirst(readline("Quel mot recherchez vous ? "));

echo "\nLe mot se trouve à la position numéro : ". array_search($mot, $dico);
