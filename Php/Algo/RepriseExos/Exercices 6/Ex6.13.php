<?php
// M.S

require "../FonctionsTableaux.php";

// Création du tableau
$longueur = demandeEntier("Quelle est la taille du tableau ? ");
$tab = creerTableauAvecTaille($longueur);

$max = $tab[0];
$pos = 0;

// On cherche la plus grande valeur du tableau
for($i = 0; $i < count($tab); $i++)
{
    if ($max < $tab[$i])
    {
        $max = $tab[$i];
        $pos = $i;
    }
}
// Affichage
echo "\nLa plus grande valeur du tableau est : ". $max. ", elle se situe à la case ". $pos;