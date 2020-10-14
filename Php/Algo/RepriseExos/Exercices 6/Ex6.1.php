<?php
// M.S

// Appel des fonctions
require "../FonctionsTableaux.php";

// Création d'un tableau de 7 cases
for($i = 0; $i < 7; $i++)       
{
    $nb = demandeEntier("Entrer un nombre : ");     // Remplissage du tableau
    $tableau[$i] = 0;           // Met tout les chiffres du tableau à 0
    
}

// Affichage du tableau
for($i = 0; $i < 7; $i++)       // On commence à la première case ($tableau[0]) jusqu'à la septième ($tableau[7])
{
    echo $tableau[$i]."\t";
}