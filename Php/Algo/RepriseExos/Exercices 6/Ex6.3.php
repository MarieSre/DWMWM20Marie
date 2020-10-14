<?php
// M.S

// Appel des fonctions
require "../FonctionsTableaux.php";

// Création d'un tableau à 9 cases
for($i = 0; $i < 9; $i++)
{
    $note = demandeEntier("Entrer une note : ");
    $tab[$i] = $note;

}
// Affichage du tableau
for($i = 0; $i < 9; $i++)
{
    echo $tab[$i]."\t";
}
