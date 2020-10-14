<?php
// M.S

// Appel des fonctions
require "../FonctionsTableaux.php";

// Création d'un tableau à 9 cases
for($i = 0; $i < 9; $i++)
{
    $note = demandeEntier("Entrer une note : ");
    $tab[$i] = $note;
    $moyenne = array_sum($tab) / 9;     // Calcul de la moyenne

}
// Affichage du tableau
for($i = 0; $i < 9; $i++)
{
    echo $tab[$i]."\t";
}
// Affichage de la moyenne
echo "\nLa moyenne des notes est de : ". $moyenne;
