<?php
// M.S

require "../FonctionsTableaux.php";

// Saisie d'un nombre

$nb = demandeEntier("Entrer un nombre : ");

$facto = 1;

echo "1";
for($i = 2; $i <= $nb; $i++)        // Calcul de la factorielle
{
    $facto = $nb* $i;
    echo " x ".$i;
}
// Affichage

echo " = ". $facto;



