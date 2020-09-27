<?php
//M.S

require "FonctionsTableaux.php"; // Appel d'une fonction
$nb= demandeEntier("Entrer un nombre :"); // Obligatien de saisir un entier

$facto = 1;

echo "1";
for ($i = 2; $i <=$nb ; $i++) // Calcul de la factorielle
{
    $facto = $facto * $i;
    echo " x ". $i;
}
echo " = " . $facto; // Affichage de la factorielle