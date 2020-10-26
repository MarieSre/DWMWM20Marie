<?php
// M.S

// Appel de la fonction demandeEntier
require "../FonctionsTableaux.php";


function factorielle($nombre) //calcule la factorielle d'un nombre
{
    $facto = 1;

/* Calculer la factorielle */
    for ($i = 1; $i <= $nombre; $i++)
    {
        $facto = $facto * $i; //$facto *=$i;
    }
    return $facto;
}

// Saisie du nombre de chevaux partant et joués
$p = demandeEntier("Nombre de chevaux partant : ");
$j = demandeEntier("Nombre de chevaux joués : ");

// Affichage dans l'ordre et dans le désordre
echo "Dans l'ordre : une chance sur ". factorielle($p) / factorielle(($p - $j)) . " de gagner.\n"; // Formule X = n ! / (n - p)!
echo "Dans désordre : une chance sur ". factorielle($p) / (factorielle($j) * (factorielle($p - $j))) . " de gagner.";   // Formule Y= ! /(p ! * (n - p) !)