<?php
// M.S

// Appel des fonctions
require "../FonctionsTableaux.php";

$moyenne = 0;
// Création d'un tableau à 9 cases

for($i = 0; $i < 9; $i++)
{
    $note = demandeEntier("Entrer une note : ");
    $t[$i] = $note;
    // Calcul de la moyenne
    $moyenne += $t[$i] / 9;     // Ou array_sum($t) / 9

}
// Affichage du tableau
for($i = 0; $i < 9; $i++)
{
    echo $t[$i]."\t";
}
// Affichage de la moyenne
echo "\nLa moyenne des notes est de : ". $moyenne;