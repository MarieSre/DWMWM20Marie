<?php
// M.S

require "../FonctionsTableaux.php";

// Création du tableau
$longueur = demandeEntier("Quelle est la taille du tableau ? ");
$tab = creerTableauAvecTaille($longueur);

$somme = 0;

// Calcul de la moyenne
for($i = 0; $i < count($tab); $i++)
{
    $somme += $tab[$i];
}
$moyenne = array_sum($tab)/count($tab);

// Affichage de la moyenne
echo "\nLa moyenne de la classe est de : ". $moyenne."\n";

$compteur = 0;

// On compte le nombre de note supérieur à la moyenne
for($i = 0; $i < count($tab); $i++)
{
    if($moyenne < $tab[$i])
    {
        $compteur++;
    }
}
//  Affichage des notes supérieur à la moyenne
echo "\nIl y a ". $compteur . " note(s) au dessus de la moyenne";
