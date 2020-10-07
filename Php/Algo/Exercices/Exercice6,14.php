<?php
//M.S
require "FonctionsTableaux.php"; // Appel des fonctions

$nbr = demandeEntier("Combien de valeur ? :"); // Demande à l'utilisateur d'entrer un entier
$tab = creerTableauAvecTaille($nbr);

$somme = 0;

for ($i = 0; $i < count($tab); $i++) //Recherche de la plus grande valeur
{
    $somme += $tab[$i];
}
$moyenne = $somme / count($tab); //Autre façon : $moyenne = array_sum($tab)/count($tab);

$moyenneSup = 0; // Variable du nombre de note supérieur à la moyenne

for ($i = 0; $i < count($tab); $i++) { // Recherche du nombre de note supérieur à la moyenne
    if ($moyenne < $tab[$i]) {
        $moyenneSup++;
    }
}

afficheTableau($tab);
echo "Il y a $moyenneSup valeur supérieur à la moyenne";
